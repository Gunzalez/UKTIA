// JavaScript Document
(function ($, window) {
	
	var uktia = {};

    uktia.properties = {
        windowWidth: '',
        isMobile: false,
        isDesktop: false
    };

    uktia.environment = {
        mobileCheck: function() {
            var check = false;
            (function(a,b){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        },

        isTouchDevice: function() {
            return (('ontouchstart' in window)
            || (navigator.MaxTouchPoints > 0)
            || (navigator.msMaxTouchPoints > 0));
        },

        init: function(){
            var self = uktia;

            // window size
            self.properties.windowWidth = $(window).width();

            // device type
            if(self.environment.mobileCheck()){
                self.environment.isMobile = true;
                $('html').addClass('mobile');
            } else {
                self.environment.isDesktop = true;
                $('html').addClass('desktop');
            }

            if(uktia.environment.isTouchDevice()){

                $('body').on('click', function(){
                    uktia.navigation.closeDropdowns();
                });

                $(window).on('scroll', function(){
                    self.navigation.closeDropdowns();
                });
            }

            // sets up back to top button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });

            // click event to scroll to top
            $('.back-to-top').click(function(evt){
                evt.preventDefault();
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

        },

        resize : function(){
            uktia.navigation.reszie();
            uktia.content.resize();
        }
    };

    uktia.navigation = {
        $html: $('#navigation-list'),
        $htmlMobile: $('nav#mobile-navigation'),

        mobile: {
            init: function(){
                uktia.navigation.$htmlMobile.mmenu({
                    offCanvas: {
                        position: "right"
                    }
                });
            }
        },

        closeDropdowns: function(){
            var self = this;
            $('ul', self.$html).removeAttr('style');
            $('.open').removeClass('open');
        },

        init: function(){
            var self = this;
            if(self.$html.length > 0){
                var $topLevel = $('> li', self.$html);

                if(uktia.environment.isTouchDevice()){// touch devices

                    $topLevel.each(function(){

                        $('> a', $(this)).on('click', function(evt){

                            evt.preventDefault();
                            evt.stopPropagation();

                            var $parentLi = $(this).parents('li'),
                                locationHref = $(this).attr('href');

                            if($('ul', $parentLi).length > 0 ){// has dropdowns

                                if($parentLi.hasClass('open')){

                                    // dropdown was already open so go to href
                                    location.assign(locationHref);

                                } else {

                                    // dropdown was not open, shut others, open this one
                                    self.closeDropdowns();
                                    $('ul', $parentLi).css('display','block');
                                    $parentLi.addClass('open');

                                }

                            } else {

                                // has no dropdowns, so go directly to href
                                location.assign(locationHref);

                            }
                        });
                    });

                } else {

                    // non touch devices
                    $topLevel.each(function(){
                        $(this).on('mouseenter', function(){

                            $('ul', $(this)).css('display','block');
                            $(this).addClass('open');

                        });
                        $(this).on('mouseleave', function(){

                            $('ul', $(this)).css('display','none');
                            $(this).removeClass('open');

                        });
                    });

                }

                // initiate mobile navigation
                self.mobile.init();
            }
        },

        reszie: function(){
            var self = this;
            self.$htmlMobile.trigger("close.mm");
            self.closeDropdowns();
        }

    };

    uktia.content = {
        $tables: $('.stripped-table'),
        $descriptions: $('#circular-descriptions'),
        $memberIcons: $('ul.tea-members'),
        $filterForm: $('.filter-form'),

        init: function(){

            // cosmetic
            $(this.$memberIcons).each(function(i, obj){
                var $membersList = $(obj);
                $('li', $membersList).each(function(i, li){
                    var $url = $('a', $(li)).attr('href');
                    $(li).on('click', function(){
                        location.assign($url);
                    })
                })
            });

            // stripped tables
            $(this.$tables).each(function(i, obj){
                var $table = $(obj);
                $('tr:odd',$table).addClass('odd');
                $table.attr('cellpadding','0').attr('cellspacing','0');
            });

            // circular descriptions
            if(this.$descriptions.length > 0){
                var $html = this.$descriptions,
                    $screen = $('.screen', $html),
                    $iconsList = $('dl', $html),
                    eventTrigger = 'mouseenter',
                    resetText = 'Roll over icons for descriptions',
                    resetAllDataTerms = function(){
                        $screen.html(resetText);
                        $('dt', $iconsList).removeAttr('class');
                    },
                    setThisDataTerm = function(dtObj){
                        var term = $(dtObj).attr('data-term'),
                            definition = $('dd[data-definition="'+term+'"]', $iconsList).html();

                        $('dt', $iconsList).removeAttr('class');
                        $(dtObj).addClass('active');
                        $screen.html(definition);
                    };

                // for touch devices
                if(uktia.environment.isTouchDevice()) {
                    eventTrigger = 'click';
                    resetText = 'Click on icons for descriptions';
                }

                $iconsList.delegate('dt', eventTrigger, function(){
                    setThisDataTerm($(this));
                });

                $iconsList.on('mouseleave', function(){
                    resetAllDataTerms();
                });

                resetAllDataTerms();
            }

            // advanced fields
            if(this.$filterForm.length > 0){
                var $html = this.$filterForm,
                    $slideOutButton = $('.show-button', $html),
                    $slideInButton = $('.hide-button', $html),
                    $advancedFields = $('.advanced-fields', $html),
                    isBusy = false,
                    slideSpeed = 250,

                    // topic & sub-topic
                    $topicSelect = $('#topic', $html),
                    $subTopicSelectContainer = $('.sub-topic', $html),

                    // simulating search spinner
                    $submitButton = $('#get-updates', $html),
                    $searchScreen = $('#searching'),
                    $resultsScreen = $('#search-results');

                $submitButton.on('click', function(evt){
                    evt.preventDefault();
                    $resultsScreen.hide();
                    $searchScreen.show();
                    $('html,body').animate({scrollTop: $('.footer').offset().top},'slow');
                    var countDown = setTimeout(function () {
                        $resultsScreen.show();
                        $searchScreen.hide();
                        clearTimeout(countDown);
                    }, 4000);
                });

                $topicSelect.on('change', function(){

                    // todo: obviously use real criteria
                    var value = $topicSelect.val();
                    if(value == 21 || value == 5 || value == 11 || value == 10 || value == 2 || value == 4){

                        // fake data
                        $('select', $subTopicSelectContainer).empty();
                        $('select', $subTopicSelectContainer).append('<option value="all"> View all </option>');
                        $('select', $subTopicSelectContainer).append('<option value="15"> Darjeeling </option></select>');

                        $subTopicSelectContainer.removeClass('hidden');
                    } else {
                        $subTopicSelectContainer.addClass('hidden');
                    }
                });

                $advancedFields.on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(e){
                    $slideOutButton.parents('.show-hide-buttons').removeClass('hidden');
                });

                $slideOutButton.on('click',function(evt){
                    evt.preventDefault();
                    $slideOutButton.parents('.show-hide-buttons').addClass('hidden').addClass('opened');
                    $advancedFields.addClass('opened');
                });

                $slideInButton.on('click',function(evt){
                    evt.preventDefault();
                    $slideOutButton.parents('.show-hide-buttons').addClass('hidden').removeClass('opened');
                    $advancedFields.removeClass('opened');
                });
            }

            // smooth anchor scrolling
            $('.archive-link a').on('click', function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 20
                        }, 1000);
                        return false;
                    }
                }
            });
        },

        resize: function(){
            // nowt
        }
    };

	uktia.init = function(){

        // Other init
        uktia.environment.init();
        uktia.navigation.init();
        uktia.content.init();
        // add init methods as needed
        // ...

        // Resize triggers
		$(window).on('resize',function(){
			
			var newWidth = $(window).width(),
                oldWidth = uktia.properties.windowWidth;

			if(oldWidth != newWidth){
                uktia.properties.windowWidth = newWidth;
				uktia.resize();
			}
		});

        uktia.resize();
        $(window).trigger('resize');
	};

    uktia.resize = function(){
        uktia.environment.resize();
        // add resize methods as needed
        // ...
    };

    // Main init
	$(document).ready(function(){
		uktia.init();
	});

}(jQuery, window));