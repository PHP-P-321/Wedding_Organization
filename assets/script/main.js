$(document).ready(function(){
    // Для каждого элемента с классом .dropdown
    $('.dropdown').each(function() {
        var dropdown = $(this);
        var countOption = dropdown.find('.old-select option').length;

        function openSelect(){
            var heightSelect = dropdown.find('.new-select').height();
            var marginBottom = (countOption - 1) * (heightSelect + 1) + 50; // Вычисление margin-bottom
            dropdown.css('margin-bottom', marginBottom + 'px'); // Применение margin-bottom
            var j=1;
            dropdown.find('.new-select .new-option').each(function(){
                $(this).addClass('reveal');
                $(this).css({
                    'box-shadow':'0 1px 1px rgba(0,0,0,0.1)',
                    'left':'0',
                    'right':'0',
                    'top': j*(heightSelect+1)+'px'
                });
                j++;
            });
        }

        function closeSelect(){
            dropdown.css('margin-bottom', '0');
            var i=0;
            dropdown.find('.new-select .new-option').each(function(){
                $(this).removeClass('reveal');
                if(i<countOption-3){
                    $(this).css('top',0);
                    $(this).css('box-shadow','none');
                }
                else if(i===countOption-3){
                    $(this).css('top','3px');
                }
                else if(i===countOption-2){
                    $(this).css({
                        'top':'7px',
                        'left':'2px',
                        'right':'2px'
                    });
                }
                else if(i===countOption-1){
                    $(this).css({
                        'top':'11px',
                        'left':'4px',
                        'right':'4px'
                    });
                }
                i++;
            });
        }

        // Инициализация
        if(dropdown.find('.old-select option[selected]').length === 1){
            dropdown.find('.selection p span').html(dropdown.find('.old-select option[selected]').html());
        }
        else{
            dropdown.find('.selection p span').html(dropdown.find('.old-select option:first-child').html());
        }

        dropdown.find('.old-select option').each(function(){
            newValue = $(this).val();
            newHTML = $(this).html();
            dropdown.find('.new-select').append('<div class="new-option" data-value="'+newValue+'"><p>'+newHTML+'</p></div>');
        });

        var reverseIndex = countOption;
        dropdown.find('.new-select .new-option').each(function(){
            $(this).css('z-index',reverseIndex);
            reverseIndex = reverseIndex-1;        
        });

        closeSelect();

        // Открытие / Закрытие
        dropdown.find('.selection').click(function(){
            $(this).toggleClass('open');
            if($(this).hasClass('open')===true){openSelect();}
            else{closeSelect();}
        });

        // Выбор
        dropdown.find('.new-option').click(function(){
            var newValue = $(this).data('value');

            // Выбор New Select
            dropdown.find('.selection p span').html($(this).find('p').html());
            dropdown.find('.selection').click();

            // Выбор Old Select
            dropdown.find('.old-select option[selected]').removeAttr('selected');
            dropdown.find('.old-select option[value="'+newValue+'"]').attr('selected','');
        });
    });
});
