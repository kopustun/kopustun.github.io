   
   $(document).ready(function()
   {
      $("#RadioButton1").change(function()
      {
         if ($('#RadioButton1').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton1").trigger('change');
      $("#RadioButton2").change(function()
      {
         if ($('#RadioButton2').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton2").trigger('change');
      $("#RadioButton3").change(function()
      {
         if ($('#RadioButton3').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton3").trigger('change');
      $("#RadioButton4").change(function()
      {
         if ($('#RadioButton4').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton4").trigger('change');
      $("#RadioButton5").change(function()
      {
         if ($('#RadioButton5').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton5").trigger('change');
      $("#RadioButton6").change(function()
      {
         if ($('#RadioButton6').is(':checked'))
         {
            ShowObject('wb_Shape1', 0);
         }
      });
      $("#RadioButton6").trigger('change');
      $("#RadioButton7").change(function()
      {
         if ($('#RadioButton7').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton7").trigger('change');
      $("#RadioButton8").change(function()
      {
         if ($('#RadioButton8').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton8").trigger('change');
      $("#RadioButton9").change(function()
      {
         if ($('#RadioButton9').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton9").trigger('change');
      $("#RadioButton10").change(function()
      {
         if ($('#RadioButton10').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton10").trigger('change');
      $("#RadioButton11").change(function()
      {
         if ($('#RadioButton11').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton11").trigger('change');
      $("#RadioButton12").change(function()
      {
         if ($('#RadioButton12').is(':checked'))
         {
            ShowObject('wb_Shape4', 0);
         }
      });
      $("#RadioButton12").trigger('change');
      $("#wb_Image18").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#000000;font-family:Circe;font-size:13px;\">Листова металочерепиця - найпоширеніший в Україні покрівельний матеріал, представлений в широкому асортименті хвиль, кольорів та покриттів.</span>",
         items: '#wb_Image18',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip1' }
      });
      $("#wb_Image17").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#262626;font-family:Circe;font-size:12px;\">Модульна металочерепиця - найсучасніший інноваційний покрівельний матеріал, який відкрив нову еру металевих черепиць. Дозволить уникнути великої кількості обрізків на складних дахах.</span>",
         items: '#wb_Image17',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip2' }
      });
      $("#wb_Image16").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#262626;font-family:Circe;font-size:12px;\">Профнастил - це бляха трапецієподібна фасадно-дахового профілю. Спеціальна техніка покривання забезпечує профнастилу відмінну витривалість та стійкість. Додатковою позитивною ознакою є простий монтаж, що дозволяє самостійне встановлення, при використанні звичайних засобів. Бездоганно підходить як для приватних так і для промислових, торговельних об'єктів.</span>",
         items: '#wb_Image16',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip3' }
      });
      $("#wb_Image21").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#262626;font-family:Circe;font-size:12px;\">Бітумна черепиця - покрівельний матеріал на основі скловолокна, просоченого бітумом і декорованого кольоровою кам'яною крихтою. Широкий асортимент видів і кольорів, можливість застосування на складних дахах і відсутність процесу корозії - одні з найбільш значущих переваг бітумної черепиці.</span>",
         items: '#wb_Image21',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip4' }
      });
      $("#wb_Image20").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#262626;font-family:Circe;font-size:12px;\">Композитна черепиця - різновид металочерепиці з посипкою із кам'яної крихти. Різноманітність видів і кольорів композитної металочерепиці дозволяють втілювати різні дизайнерські рішення!</span>",
         items: '#wb_Image20',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip5' }
      });
      $("#wb_Image19").tooltip(
      {
         hide: true,
         show: true,
         content: "<span style=\"color:#262626;font-family:Circe;font-size:12px;\">Натуральне покриття, виготовлене з екологічно чистого матеріалу. Стійка до негативних факторів навколишнього середовища.Термін служби даху з керамічної черепиці досягає 100-150 років.</span>",
         items: '#wb_Image19',
         position: { my: "center bottom", at: "center top", collision: "flipfit" },
         classes: { 'ui-tooltip' : 'ToolTip6' }
      });
      $("#RadioButton18").change(function()
      {
         if ($('#RadioButton18').is(':checked'))
         {
            ShowObject('wb_Shape6', 0);
         }
      });
      $("#RadioButton18").trigger('change');
      $("#Slider1").slider(
      {
         orientation: 'horizontal',
         animate: true,
         range: false,
         min: 10,
         max: 1000,
         value: 258
      });
   
      $("#Slider1").bind('slide', function(event, ui)
      {
         $("#Editbox1").val(ui.value);
      });
      $("#Checkbox1").change(function()
      {
         if ($('#Checkbox1').is(':checked'))
         {
            ShowObject('wb_Shape6', 0);
            $('#wb_RadioButton18').prop('disabled', true);
         }
         if (!$('#Checkbox1').is(':checked'))
         {
            ShowObject('RadioButton17', 1);
         }
      });
      $("#Checkbox1").trigger('change');
      $("#RadioButton171111").change(function()
      {
         if ($('#RadioButton171111').is(':checked'))
         {
            ShowObject('wb_Shape6', 0);
         }
      });
      $("#RadioButton171111").trigger('change');
      $("#RadioButton13").change(function()
      {
         if ($('#RadioButton13').is(':checked'))
         {
            ShowObject('wb_Shape8', 0);
         }
      });
      $("#RadioButton13").trigger('change');
      $("#RadioButton14").change(function()
      {
         if ($('#RadioButton14').is(':checked'))
         {
            ShowObject('wb_Shape8', 0);
         }
      });
      $("#RadioButton14").trigger('change');
      $("#RadioButton15").change(function()
      {
         if ($('#RadioButton15').is(':checked'))
         {
            ShowObject('wb_Shape10', 0);
         }
      });
      $("#RadioButton15").trigger('change');
      $("#RadioButton16").change(function()
      {
         if ($('#RadioButton16').is(':checked'))
         {
            ShowObject('wb_Shape10', 0);
         }
      });
      $("#RadioButton16").trigger('change');
      $("#RadioButton19").change(function()
      {
         if ($('#RadioButton19').is(':checked'))
         {
            ShowObject('wb_Shape12', 0);
         }
      });
      $("#RadioButton19").trigger('change');
      $("#RadioButton20").change(function()
      {
         if ($('#RadioButton20').is(':checked'))
         {
            ShowObject('wb_Shape12', 0);
         }
      });
      $("#RadioButton20").trigger('change');
      $("#RadioButton21").change(function()
      {
         if ($('#RadioButton21').is(':checked'))
         {
            ShowObject('wb_Shape14', 0);
            ShowObject('podarok1', 1);
            ShowObject('podarok2', 0);
            ShowObject('podarok3', 0);
            ShowObject('Layer5', 1);
            ShowObject('Layer3', 0);
            ShowObject('Layer4', 0);
         }
      });
      $("#RadioButton21").trigger('change');
      $("#RadioButton22").change(function()
      {
         if ($('#RadioButton22').is(':checked'))
         {
            ShowObject('wb_Shape14', 0);
            ShowObject('podarok2', 1);
            ShowObject('podarok1', 0);
            ShowObject('podarok3', 0);
            ShowObject('Layer4', 1);
            ShowObject('Layer3', 0);
            ShowObject('Layer5', 0);
         }
      });
      $("#RadioButton22").trigger('change');
      $("#RadioButton23").change(function()
      {
         if ($('#RadioButton23').is(':checked'))
         {
            ShowObject('wb_Shape14', 0);
            ShowObject('podarok3', 1);
            ShowObject('podarok1', 0);
            ShowObject('podarok2', 0);
            ShowObject('Layer3', 1);
            ShowObject('Layer4', 0);
            ShowObject('Layer5', 0);
         }
      });
      $("#RadioButton23").trigger('change');
   });
      
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   
      ym(56430505, "init", {
           clickmap:true,
           trackLinks:true,
           accurateTrackBounce:true,
           webvisor:true
      });
   