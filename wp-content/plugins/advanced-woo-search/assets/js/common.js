// Hooks
var AwsHooks = AwsHooks || {};
AwsHooks.filters = AwsHooks.filters || {};

(function($){
    "use strict";

    var selector = '.aws-container';
    var instance = 0;
    var pluginPfx = 'aws_opts';
    var translate = {
        sale      : aws_vars.sale,
        sku       : aws_vars.sku,
        showmore  : aws_vars.showmore,
        noresults : aws_vars.noresults
    };

    AwsHooks.add_filter = function( tag, callback, priority ) {

        if( typeof priority === "undefined" ) {
            priority = 10;
        }

        AwsHooks.filters[ tag ] = AwsHooks.filters[ tag ] || [];
        AwsHooks.filters[ tag ].push( { priority: priority, callback: callback } );

    };

    AwsHooks.apply_filters = function( tag, value, options ) {

        var filters = [];

        if( typeof AwsHooks.filters[ tag ] !== "undefined" && AwsHooks.filters[ tag ].length > 0 ) {

            AwsHooks.filters[ tag ].forEach( function( hook ) {

                filters[ hook.priority ] = filters[ hook.priority ] || [];
                filters[ hook.priority ].push( hook.callback );
            } );

            filters.forEach( function( AwsHooks ) {

                AwsHooks.forEach( function( callback ) {
                    value = callback( value, options );
                } );

            } );
        }

        return value;

    };

    $.fn.aws_search = function( options ) {

        var methods = {

            init: function() {

                // @since 2.16
                var appendResultsTo = AwsHooks.apply_filters( 'aws_results_append_to', 'body', { instance: instance, form: self, data: d } );

                $(appendResultsTo).append('<div id="aws-search-result-' + instance + '" class="aws-search-result" style="display: none;"></div>');

                methods.addClasses();

                setTimeout(function() { methods.resultLayout(); }, 500);

            },

            onKeyup: function(e) {

                searchFor = $searchField.val();
                searchFor = searchFor.trim();
                searchFor = searchFor.replace( /<>\{\}\[\]\\\/]/gi, '' );
                searchFor = searchFor.replace( /\s\s+/g, ' ' );

                for ( var i = 0; i < requests.length; i++ ) {
                    requests[i].abort();
                }

                if ( d.showPage == 'ajax_off' ) {
                    return;
                }

                if ( searchFor === '' ) {
                    $(d.resultBlock).html('').hide();
                    methods.hideLoader();
                    methods.resultsHide();
                    return;
                }

                if ( cachedResponse.hasOwnProperty( searchFor ) ) {
                    methods.showResults( cachedResponse[searchFor] );
                    return;
                }

                if ( searchFor.length < d.minChars ) {
                    $(d.resultBlock).html('');
                    methods.hideLoader();
                    return;
                }

                if ( d.showLoader ) {
                    methods.showLoader();
                }

                var searchTimeout = d.searchTimeout > 100 ? d.searchTimeout : 300;

                clearTimeout( keyupTimeout );
                keyupTimeout = setTimeout( function() {
                    methods.ajaxRequest();
                }, searchTimeout );

            },

            ajaxRequest: function() {

                var data = {
                    action: 'aws_action',
                    keyword : searchFor,
                    aws_page: d.pageId,
                    aws_tax: d.tax,
                    lang: d.lang,
                    pageurl: window.location.href,
                    typedata: 'json'
                };

                requests.push(

                    $.ajax({
                        type: 'POST',
                        url: ajaxUrl,
                        data: data,
                        dataType: 'json',
                        success: function( response ) {

                            cachedResponse[searchFor] = response;

                            methods.showResults( response );

                            methods.showResultsBlock();

                            methods.analytics( searchFor );

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log( "Request failed: " + textStatus );
                            methods.hideLoader();
                        }
                    })

                );

            },

            showResults: function( response ) {

                var resultNum = 0;
                var html = '<ul>';

                if ( typeof response.tax !== 'undefined' ) {

                    $.each(response.tax, function (i, taxes) {

                        if ( ( typeof taxes !== 'undefined' ) && taxes.length > 0 ) {
                            $.each(taxes, function (i, taxitem) {

                                resultNum++;

                                html += '<li class="aws_result_item aws_result_tag">';
                                    html += '<a class="aws_result_link" href="' + taxitem.link + '" >';
                                        html += '<span class="aws_result_content">';
                                            html += '<span class="aws_result_title">';
                                                html += taxitem.name;
                                                if ( taxitem.count ) {
                                                    html += '<span class="aws_result_count">&nbsp;(' + taxitem.count + ')</span>';
                                                }
                                            html += '</span>';
                                            if ( ( typeof taxitem.excerpt !== 'undefined' ) && taxitem.excerpt ) {
                                                html += '<span class="aws_result_excerpt">' + taxitem.excerpt + '</span>';
                                            }
                                        html += '</span>';
                                    html += '</a>';
                                html += '</li>';

                            });
                        }

                    });

                }

                if ( ( typeof response.products !== 'undefined' ) && response.products.length > 0 ) {

                    $.each(response.products, function (i, result) {

                        resultNum++;

                        html += '<li class="aws_result_item">';
                        html += '<a class="aws_result_link" href="' + result.link + '" >';

                        if ( result.image ) {
                            html += '<span class="aws_result_image">';
                            html += '<img src="' + result.image + '">';
                            html += '</span>';
                        }

                        html += '<span class="aws_result_content">';

                        html += '<span class="aws_result_title">';
                            if ( result.featured ) {
                                html += '<span class="aws_result_featured" title="Featured"><svg version="1.1" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><g fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-296.000000, -422.000000)"><g transform="translate(296.000000, 422.500000)"><path d="M10,15.273 L16.18,19 L14.545,11.971 L20,7.244 L12.809,6.627 L10,0 L7.191,6.627 L0,7.244 L5.455,11.971 L3.82,19 L10,15.273 Z"/></g></g></g></svg></span>';
                            }
                            html += result.title;
                        html += '</span>';

                        if ( result.stock_status ) {
                            var statusClass = result.stock_status.status ? 'in' : 'out';
                            html += '<span class="aws_result_stock ' + statusClass + '">';
                                html += result.stock_status.text;
                            html += '</span>';
                        }

                        if ( result.sku ) {
                            html += '<span class="aws_result_sku">' + translate.sku +  result.sku + '</span>';
                        }

                        if ( result.excerpt ) {
                            html += '<span class="aws_result_excerpt">' + result.excerpt + '</span>';
                        }

                        if ( result.price ) {
                            html += '<span class="aws_result_price">' + result.price + '</span>';
                        }

                        html += '</span>';

                        if ( result.on_sale ) {
                            html += '<span class="aws_result_sale">';
                            html += '<span class="aws_onsale">' + translate.sale + '</span>';
                            html += '</span>';
                        }

                        html += '</a>';
                        html += '</li>';

                    });

                    if ( d.showMore && d.showPage ) {
                        html += '<li class="aws_result_item aws_search_more"><a href="#">' + translate.showmore + '</a></li>';
                    }

                    //html += '<li class="aws_result_item"><a href="#">Next Page</a></li>';

                }

                if ( ! resultNum ) {
                    html += '<li class="aws_result_item aws_no_result">' + translate.noresults + '</li>';
                }


                html += '</ul>';

                // @since 2.05
                html = AwsHooks.apply_filters( 'aws_results_html', html, { response: response, data: d } );


                methods.hideLoader();

                $(d.resultBlock).html( html );

                methods.showResultsBlock();

                if ( eShowResults ) {
                    self[0].dispatchEvent( eShowResults );
                }

            },

            showResultsBlock: function() {
                methods.resultLayout();
                methods.resultsShow();
            },

            showLoader: function() {
                $searchForm.addClass('aws-processing');
            },

            hideLoader: function() {
                $searchForm.removeClass('aws-processing');
            },

            resultsShow: function() {
                $(d.resultBlock).show();
                $searchForm.addClass('aws-form-active');
            },

            resultsHide: function() {
                $(d.resultBlock).hide();
                $searchForm.removeClass('aws-form-active');
            },

            onFocus: function( event ) {

                var show = AwsHooks.apply_filters( 'aws_show_modal_layout', false, { instance: instance, form: self, data: d } );

                if ( ! $('body').hasClass('aws-overlay') && ( ( methods.isMobile() && d.mobileScreen && ! methods.isFixed() ) || show ) ) {
                    methods.showMobileLayout();
                }

                if ( searchFor !== '' ) {
                    methods.showResultsBlock();
                }

            },

            hideResults: function( event ) {
                if ( ! $(event.target).closest( ".aws-container" ).length ) {
                    methods.resultsHide();
                }
            },

            isResultsVisible:function() {
                return $(d.resultBlock).is(":visible");
            },

            removeHovered: function() {
                $( d.resultBlock ).find('.aws_result_item').removeClass('hovered');
            },

            resultLayout: function () {

                var $resultsBlock = $( d.resultBlock );
                var offset = self.offset();
                var bodyOffset = $('body').offset();
                var bodyPosition = $('body').css('position');
                var bodyHeight = $(document).height();
                var resultsHeight = $resultsBlock.height();

                if ( offset && bodyOffset  ) {

                    var styles = {
                        width: self.outerWidth(),
                        top : 0,
                        left: 0
                    };

                    if ( bodyPosition === 'relative' || bodyPosition === 'absolute' || bodyPosition === 'fixed' ) {
                        styles.top = offset.top + $(self).innerHeight() - bodyOffset.top;
                        styles.left = offset.left - bodyOffset.left;
                    } else {
                        styles.top = offset.top + $(self).innerHeight();
                        styles.left = offset.left;
                    }

                    if ( bodyHeight - offset.top < 500 ) {
                        resultsHeight = methods.getResultsBlockHeight();
                        if ( ( bodyHeight - offset.top < resultsHeight ) && ( offset.top >= resultsHeight ) ) {
                            styles.top = styles.top - resultsHeight - $(self).innerHeight();
                        }
                    }

                    // @since 2.10
                    styles = AwsHooks.apply_filters( 'aws_results_layout', styles, { resultsBlock: $resultsBlock, form: self } );

                    $resultsBlock.css( styles );

                }

            },

            getResultsBlockHeight: function() {

                var $resultsBlock = $( d.resultBlock );
                var resultsHeight = $resultsBlock.height();

                if ( resultsHeight === 0 ) {
                    var copied_elem = $resultsBlock.clone()
                        .attr("id", false)
                        .css({visibility:"hidden", display:"block",
                            position:"absolute"});
                    $("body").append(copied_elem);
                    //copied_elem.find('.mCSB_outside').attr('style', '');
                    resultsHeight = copied_elem.height();
                    copied_elem.remove();
                }

                return resultsHeight;

            },

            showMobileLayout: function() {
                self.after('<div class="aws-placement-container"></div>');
                self.addClass('aws-mobile-fixed').prepend('<div class="aws-mobile-fixed-close"><svg width="17" height="17" viewBox="1.5 1.5 21 21"><path d="M22.182 3.856c.522-.554.306-1.394-.234-1.938-.54-.543-1.433-.523-1.826-.135C19.73 2.17 11.955 10 11.955 10S4.225 2.154 3.79 1.783c-.438-.371-1.277-.4-1.81.135-.533.537-.628 1.513-.25 1.938.377.424 8.166 8.218 8.166 8.218s-7.85 7.864-8.166 8.219c-.317.354-.34 1.335.25 1.805.59.47 1.24.455 1.81 0 .568-.456 8.166-7.951 8.166-7.951l8.167 7.86c.747.72 1.504.563 1.96.09.456-.471.609-1.268.1-1.804-.508-.537-8.167-8.219-8.167-8.219s7.645-7.665 8.167-8.218z"></path></svg></div>');
                $('body').addClass('aws-overlay').append('<div class="aws-overlay-mask"></div>').append( self );
                $searchField.focus();
            },

            hideMobileLayout: function() {
                $('.aws-placement-container').after( self ).remove();
                self.removeClass('aws-mobile-fixed');
                $('body').removeClass('aws-overlay');
                $('.aws-mobile-fixed-close').remove();
                $('.aws-overlay-mask').remove();
            },

            isFixed: function() {
                var $checkElements = self.add(self.parents());
                var isFixed = false;
                $checkElements.each(function(){
                    if ($(this).css("position") === "fixed") {
                        isFixed = true;
                        return false;
                    }
                });
                return isFixed;
            },

            analytics: function( label ) {
                if ( d.useAnalytics ) {
                    try {
                        var sPage = '/?s=' + encodeURIComponent( 'ajax-search:' + label );
                        if ( typeof gtag !== 'undefined' && gtag !== null ) {
                            gtag('event', 'AWS search', {
                                'event_label': label,
                                'event_category': 'AWS Search Term',
                                'transport_type' : 'beacon'
                            });
                            gtag('event', 'page_view', {
                                'page_path': sPage,
                                'page_title' : 'AWS search'
                            });
                        }
                        if ( typeof ga !== 'undefined' && ga !== null ) {
                            ga('send', 'event', 'AWS search', 'AWS Search Term', label);
                            ga( 'send', 'pageview', sPage );
                        }
                        if ( typeof pageTracker !== "undefined" && pageTracker !== null ) {
                            pageTracker._trackPageview( sPage );
                            pageTracker._trackEvent( 'AWS search', 'AWS search', 'AWS Search Term', label )
                        }
                        if ( typeof _gaq !== 'undefined' && _gaq !== null ) {
                            _gaq.push(['_trackEvent', 'AWS search', 'AWS Search Term', label ]);
                            _gaq.push(['_trackPageview', sPage]);
                        }
                        // This uses Monster Insights method of tracking Google Analytics.
                        if ( typeof __gaTracker !== 'undefined' && __gaTracker !== null ) {
                            __gaTracker( 'send', 'event', 'AWS search', 'AWS Search Term', label );
                            __gaTracker( 'send', 'pageview', sPage );
                        }
                    }
                    catch (error) {
                    }
                }
            },

            addClasses: function() {
                if ( methods.isMobile() || d.showClear ) {
                    $searchForm.addClass('aws-show-clear');
                }
            },

            isMobile: function() {
                var check = false;
                (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
                return check;
            },

        };


        var self            = $(this),
            $searchForm     = self.find('.aws-search-form'),
            $searchField    = self.find('.aws-search-field'),
            $searchButton   = self.find('.aws-search-btn'),
            haveResults     = false,
            eShowResults    = false,
            requests        = Array(),
            searchFor       = '',
            keyupTimeout,
            cachedResponse = new Array();

        var ajaxUrl = ( self.data('url') !== undefined ) ? self.data('url') : false;

        if ( document.createEvent ){
            eShowResults = document.createEvent("Event");
            eShowResults.initEvent('awsShowingResults', true, true);
            eShowResults.eventName = 'awsShowingResults';
        }

        if ( options === 'relayout' ) {
            var d = self.data(pluginPfx);
            methods.resultLayout();
            return;
        }


        instance++;

        self.data( pluginPfx, {
            minChars  : ( self.data('min-chars') !== undefined ) ? self.data('min-chars') : 1,
            lang : ( self.data('lang') !== undefined ) ? self.data('lang') : false,
            showLoader: ( self.data('show-loader') !== undefined ) ? self.data('show-loader') : true,
            showMore: ( self.data('show-more') !== undefined ) ? self.data('show-more') : true,
            showPage: ( self.data('show-page') !== undefined ) ? self.data('show-page') : true,
            showClear: ( self.data('show-clear') !== undefined ) ? self.data('show-clear') : false,
            mobileScreen: ( self.data('mobile-screen') !== undefined ) ? self.data('mobile-screen') : false,
            useAnalytics: ( self.data('use-analytics') !== undefined ) ? self.data('use-analytics') : false,
            searchTimeout: ( self.data('timeout') !== undefined ) ? parseInt( self.data('timeout') ) : 300,
            instance: instance,
            resultBlock: '#aws-search-result-' + instance,
            pageId: ( self.data('page-id') !== undefined ) ? self.data('page-id') : 0,
            tax: ( self.data('tax') !== undefined ) ? self.data('tax') : 0
        });


        var d = self.data(pluginPfx);



        if ( $searchForm.length > 0 ) {
            methods.init.call(this);
        }


        $searchField.on( 'keyup input', function(e) {
            if ( e.keyCode != 40 && e.keyCode != 38 ) {
                methods.onKeyup(e);
            }
        });


        $searchField.on( 'focus', function (e) {
            $searchForm.addClass('aws-focus');
            methods.onFocus(e);
        });

        $searchField.on( 'focusout', function (e) {
            $searchForm.removeClass('aws-focus');
        });

        $searchForm.on( 'keypress', function(e) {
            if ( e.keyCode == 13 && ( ! d.showPage || $searchField.val() === '' ) ) {
                e.preventDefault();
            }
        });


        $searchButton.on( 'click', function (e) {
            if ( d.showPage && $searchField.val() !== '' ) {
                $searchForm.submit();
            }
        });


        $searchForm.find('.aws-search-clear').on( 'click', function (e) {
            $searchField.val('');
            $searchField.focus();
            methods.resultsHide();
            $(d.resultBlock).html('');
            searchFor = '';
        });


        $(document).on( 'click', function (e) {
            methods.hideResults(e);
        });


        $(window).on( 'resize', function(e) {
            methods.resultLayout();
        });


        $(window).on( 'scroll', function(e) {
            if ( $( d.resultBlock ).css('display') == 'block' ) {
                methods.resultLayout();
            }
        });


        $( d.resultBlock ).on( 'mouseenter', '.aws_result_item', function() {
            methods.removeHovered();
            $(this).addClass('hovered');
            $searchField.trigger('mouseenter');
        });


        $( d.resultBlock ).on( 'mouseleave', '.aws_result_item', function() {
            methods.removeHovered();
        });


        $( d.resultBlock ).on( 'click', '.aws_search_more', function(e) {
            e.preventDefault();
            $searchForm.submit();
        });

        $( d.resultBlock ).on( 'click', 'span[href], [data-link]', function(e) {
            e.preventDefault();
            var link = $(this).data('link') ? $(this).data('link') : $(this).attr('href');
            if ( link === '' || link === '#' ) {
                return;
            }
            e.stopPropagation();
            if ( link ) {
                window.location = link;
            }
        });

        $( self ).on( 'click', '.aws-mobile-fixed-close', function(e) {
            methods.hideMobileLayout();
        });


        $(window).on( 'keydown', function(e) {

            if ( e.keyCode == 40 || e.keyCode == 38 ) {
                if ( methods.isResultsVisible() ) {

                    e.stopPropagation();
                    e.preventDefault();

                    var $item = $( d.resultBlock ).find('.aws_result_item');
                    var $hoveredItem = $( d.resultBlock ).find('.aws_result_item.hovered');
                    var $itemsList = $( d.resultBlock ).find('ul');

                    if ( e.keyCode == 40 ) {

                        if ( $hoveredItem.length > 0 ) {
                            methods.removeHovered();
                            $hoveredItem.next().addClass('hovered');
                        } else {
                            $item.first().addClass('hovered');
                        }

                    }

                    if ( e.keyCode == 38 ) {

                        if ( $hoveredItem.length > 0 ) {
                            methods.removeHovered();
                            $hoveredItem.prev().addClass('hovered');
                        } else {
                            $item.last().addClass('hovered');
                        }

                    }

                    var activeItemOffset = $(".aws_result_item.hovered").position();
                    if ( activeItemOffset ) {
                        $itemsList.animate({
                            scrollTop: activeItemOffset.top + $itemsList.scrollTop()
                        }, 400);
                    }

                }
            }

        });


    };


    // Call plugin method
    $(document).ready( function() {

        $(selector).each( function() {
            $(this).aws_search();
        });

        // Enfold header
        $('[data-avia-search-tooltip]').on( 'click', function() {
            window.setTimeout(function(){
                $(selector).aws_search();
            }, 1000);
        } );

        // Search results filters fix
        var $filters_widget = $('.woocommerce.widget_layered_nav_filters');
        var searchQuery = window.location.search;

        if ( $filters_widget.length > 0 && searchQuery ) {
            if ( searchQuery.indexOf('type_aws=true') !== -1 ) {
                var $filterLinks = $filters_widget.find('ul li.chosen a');
                if ( $filterLinks.length > 0 ) {
                    var addQuery = '&type_aws=true';
                    $filterLinks.each( function() {
                        var filterLink = $(this).attr("href");
                        if ( filterLink && filterLink.indexOf('post_type=product') !== -1 ) {
                            $(this).attr( "href", filterLink + addQuery );
                        }
                    });
                }
            }
        }

    });


})( jQuery );