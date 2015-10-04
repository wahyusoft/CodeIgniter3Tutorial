$(document).ready(function(){  
    
    /* setting textareas component with summernote */
   
    $('#shortdesc').summernote({height: 50});
    $('#imagesDescription').summernote({height: 50});
    
    /* end setting textareas */
          
    $('#form-article')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                title_name: {
                    validators: {
                        notEmpty: {
                            message: 'The title name required and cannot be empty'
                        }
                    }
                },
                shortdesc: {
                    validators: {
                        notEmpty: {
                            message: 'The short description required and cannot be empty'
                        }
                    }
                },
                'heading[]': {
                    validators: {
                        notEmpty: {
                            message: 'The heading required and cannot be empty'
                        },
                        stringLength: {
                            max: 50,
                            message: 'The heading must be less than 50 characters long'
                        }
                    }
                },
                'pullquote[]': {
                    validators: {
                        notEmpty: {
                            message: 'The pull quote required and cannot be empty'
                        },
                        stringLength: {
                            max: 50,
                            message: 'The pull quote must be less than 50 characters long'
                        }
                    }
                },
                'quote[]': {
                    validators: {
                        notEmpty: {
                            message: 'The quote required and cannot be empty'
                        },
                        stringLength: {
                            max: 50,
                            message: 'The quote must be less than 50 characters long'
                        }
                    }
                },
                'thetext[]': {
                    validators: {
                        notEmpty: {
                            message: 'The text required and cannot be empty'
                        },
                        stringLength: {
                            max: 50,
                            message: 'The text must be less than 50 characters long'
                        }
                    }
                }
            }
        })

        // Add button click heading
        .on('click', '.add-heading', function() {
            var $template1 = $('#opt-heading'),
                $clone    = $template1
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template1),
                $option1   = $clone.find('[name="heading[]"]');

            // Add new field
            $('#form-article').formValidation('addField', $option1);
        })
        
        // Add button click text
        .on('click', '.add-text', function() {
            var $template2 = $('#opt-thetext'),
                $clone    = $template2
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template2),
                $option2   = $clone.find('[name="thetext[]"]');

            // Add new field
            $('#form-article').formValidation('addField', $option2);
        })
        
         // Add button click pull-quote
        .on('click', '.add-pullquote', function() {
            var $template3 = $('#opt-pullquote'),
                $clone    = $template3
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template3),
                $option3   = $clone.find('[name="pullquote[]"]');

            // Add new field
            $('#form-article').formValidation('addField', $option3);
        })

        // Add button click image
        .on('click', '.add-image', function() {
            var $template4 = $('#opt-image'),
                $clone    = $template4
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template4),
                $option4   = $clone.find('[name="image[]"]');

            // Add new field
            $('#form-article').formValidation('addField', $option4);
        })
        
        // Add button click quote
        .on('click', '.add-quote', function() {
            var $template5 = $('#opt-quote'),
                $clone    = $template5
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template5),
                $option5   = $clone.find('[name="image[]"]');

            // Add new field
            $('#form-article').formValidation('addField', $option5);
        })

        // Remove button click heading
        .on('click', '.removeheading', function() {
            var $row    = $(this).parents('.form-group'),
                $option1 = $row.find('[name="heading[]"]');
            // Remove element containing the option
            $row.remove();
            // Remove field
            $('#form-article').formValidation('removeField', $option1);
        })
        
         // Remove button click thetext
        .on('click', '.removethetext', function() {
            var $row    = $(this).parents('.form-group'),
                $option2 = $row.find('[name="removethetext[]"]');
            // Remove element containing the option
            $row.remove();
            // Remove field
            $('#form-article').formValidation('removeField', $option2);
        })
        
        
         // Remove button click removepullquote
        .on('click', '.removepullquote', function() {
            var $row    = $(this).parents('.form-group'),
                $option3 = $row.find('[name="removepullquote[]"]');
            // Remove element containing the option
            $row.remove();
            // Remove field
            $('#form-article').formValidation('removeField', $option3);
        })
        
        
          // Remove button click removeimage
        .on('click', '.removeimage', function() {
            var $row    = $(this).parents('.form-group'),
                $option4 = $row.find('[name="removeimage[]"]');
            // Remove element containing the option
            $row.remove();
            // Remove field
            $('#form-article').formValidation('removeField', $option4);
        })
        
         // Remove button click quote
        .on('click', '.quote', function() {
            var $row    = $(this).parents('.form-group'),
                $option5 = $row.find('[name="quote[]"]');
            // Remove element containing the option
            $row.remove();
            // Remove field
            $('#form-article').formValidation('removeField', $option5);
        })
               
        /** SAVE Entries **/
        $("#form-article").submit(function (e){ 
            e.preventDefault();
            $("#loader").show();
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                url:url,
                type:'POST',
                data:data
            }).done(function (data){
                $("#response").html(data);
                $("#loader").hide();                   
            });
        });   
          

             /** VALIDATION FORM GLOBALS **/
           $('#frm-globals').bootstrapValidator({                
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    copyright: {                     
                        validators: {
                            notEmpty: {
                                message: 'The copyright is required and cannot be empty'
                            }
                        }
                    },
                    contactUs: {
                        validators: {
                            notEmpty: {
                                message: 'The contact Us is required and cannot be empty'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email is required and cannot be empty'
                            }
                        }
                    }
                }
            }); 

             /** SAVE GLOBAL FORM **/
            $("#frm-globals").submit(function (e){
                e.preventDefault();
                $("#loader").show();
                var url = $(this).attr('action');
                var data = $(this).serialize();
                $.ajax({
                    url:url,
                    type:'POST',
                    data:data
                }).done(function (data){
                    $("#response").html(data);
                    $("#loader").hide();                      
                });
            });
    
            /** VALIDATION FORM ARTICLE **/
           $('#form-article').bootstrapValidator({  
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    title_name: {
                        message: 'The username is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The title is required and cannot be empty'
                            }
                        }
                    },
                    content_name: {
                        validators: {
                            notEmpty: {
                                message: 'The content is required and cannot be empty'
                            }
                        }
                    }
                }
            }); 
            
           /** VALIDATION FORM AWS CONFIG **/
           $('#formawsconfig').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    key: {                        
                        validators: {
                            notEmpty: {
                                message: 'The key is required and cannot be empty'
                            }
                        }
                    },
                    secret: {
                        validators: {
                            notEmpty: {
                                message: 'The secret is required and cannot be empty'
                            }
                        }
                    }
                }
            });  
            
           /** SAVE AWS CONFIG **/
            $("#formawsconfig").submit(function (e){
                e.preventDefault();
                $("#loader").show();
                var url = $(this).attr('action');
                var data = $(this).serialize();
                $.ajax({
                    url:url,
                    type:'POST',
                    data:data
                }).done(function (data){
                    $("#response").html(data);
                    $("#loader").hide();                   
                });
            });
            
          
           /** VALIDATION FORM ADD BUCKET **/
           $('#frmaddbucket').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    bucketname : {                        
                        validators: {
                            notEmpty: {
                                message: 'The bucket name is required and cannot be empty'
                            }
                        }
                    }
                }
            }); 
            
            
            
            
	/** SIDEBAR FUNCTION **/
	$('.sidebar-left ul.sidebar-menu li a').click(function() {
		"use strict";
		$('.sidebar-left li').removeClass('active');
		$(this).closest('li').addClass('active');	
		var checkElement = $(this).next();
			if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				$(this).closest('li').removeClass('active');
				checkElement.slideUp('fast');
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('.sidebar-left ul.sidebar-menu ul:visible').slideUp('fast');
				checkElement.slideDown('fast');
			}
			if($(this).closest('li').find('ul').children().length == 0) {
				return true;
				} else {
				return false;	
			}		
	});

	if ($(window).width() < 1025) {
		$(".sidebar-left").removeClass("sidebar-nicescroller");
		$(".sidebar-right").removeClass("right-sidebar-nicescroller");
		$(".nav-dropdown-content").removeClass("scroll-nav-dropdown");
	}
	/** END SIDEBAR FUNCTION **/
	
	
	/** BUTTON TOGGLE FUNCTION **/
	$(".btn-collapse-sidebar-left").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle");
		$(".sidebar-left").toggleClass("toggle");
		$(".page-content").toggleClass("toggle");
		$(".icon-dinamic").toggleClass("rotate-180");
		
		if ($(window).width() > 991) {
			if($(".sidebar-right").hasClass("toggle-left") === true){
				$(".sidebar-right").removeClass("toggle-left");
				$(".top-navbar").removeClass("toggle-left");
				$(".page-content").removeClass("toggle-left");
				$(".sidebar-left").removeClass("toggle-left");
				if($(".sidebar-left").hasClass("toggle") === true){
					$(".sidebar-left").removeClass("toggle");
				}
				if($(".page-content").hasClass("toggle") === true){
					$(".page-content").removeClass("toggle");
				}
			}
		}
	});
	$(".btn-collapse-sidebar-right").click(function(){
		"use strict";
		$(".top-navbar").toggleClass("toggle-left");
		$(".sidebar-left").toggleClass("toggle-left");
		$(".sidebar-right").toggleClass("toggle-left");
		$(".page-content").toggleClass("toggle-left");
	});
	$(".btn-collapse-nav").click(function(){
		"use strict";
		$(".icon-plus").toggleClass("rotate-45");
	});
	/** END BUTTON TOGGLE FUNCTION **/
	
	/** BEGIN BACK TO TOP **/
	$(function () {
		$("#back-top").hide();
	});
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
		
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
	/** END BACK TO TOP **/
	
	
	/** BEGIN PANEL HEADER BUTTON COLLAPSE **/
	$(function () {
		"use strict";
		$('.collapse').on('show.bs.collapse', function() {
			var id = $(this).attr('id');
			$('button.to-collapse[data-target="#' + id + '"]').html('<i class="fa fa-chevron-up"></i>');
		});
		$('.collapse').on('hide.bs.collapse', function() {
			var id = $(this).attr('id');
			$('button.to-collapse[data-target="#' + id + '"]').html('<i class="fa fa-chevron-down"></i>');
		});
		
		$('.collapse').on('show.bs.collapse', function() {
			var id = $(this).attr('id');
			$('a.block-collapse[href="#' + id + '"] span.right-icon').html('<i class="glyphicon glyphicon-minus icon-collapse"></i>');
		});
		$('.collapse').on('hide.bs.collapse', function() {
			var id = $(this).attr('id');
			$('a.block-collapse[href="#' + id + '"] span.right-icon').html('<i class="glyphicon glyphicon-plus icon-collapse"></i>');
		});
	});
	/** END PANEL HEADER BUTTON COLLAPSE **/
	
	
	
	
	/** BEGIN DATATABLE EXAMPLE **/
	if ($('#datatable-example').length > 0){
		$('#datatable-example').dataTable();
	}
	
	
	
	
});