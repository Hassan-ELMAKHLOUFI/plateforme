(function ($) {
    'use strict';
    /*[ Wizard Config ]
        ===========================================================*/
    
    try {
     var intiale = $('#js-progress').find('.progress-bar');
      var inti = parseInt(intiale.text());
    var questionum = $('#js-progress').find('.numb');
     var num = parseInt(questionum.text());
      var shi = $('#js-progress').find('.shi');
     var shii = parseInt(shi.text());
    var fin= 100 - (num * shii);
    var intif = inti - fin;

        $("#js-wizard-form").bootstrapWizard({
            'tabClass' : 'nav-tab',
            'nextSelector': '.btn-next',
            'previousSelector' : '.btn-back',
            'lastSelector': '.btn-last',
            'onNext': function(tab, navigation, index) {
                var progressBar = $('#js-progress').find('.progress-bar');
                var progressVal = $('#js-progress').find('.progress-val');
                var Blast;
                var current = index + 1;
                 if (current > 1) {
                    var val = parseInt(progressBar.text());
                    val += intif;
                    progressBar.css('width', val+ '%');
                    progressVal.text(val+'%');
                }
    
            },

            'onPrevious' : function(tab, navigation, index) {
                var progressBar = $('#js-progress').find('.progress-bar');
                var progressVal = $('#js-progress').find('.progress-val');
                index =0;
                 var current = index - 1;
                 if (current !== 1) {
                    var val = parseFloat(progressBar.text());
                    val -= intif;
                    progressBar.css('width', val+ '%');
                    progressVal.text(val+'%');
                }
    
            }
    
        });
    
    }
    catch (e) {
        console.log(e)
    }

})(jQuery);