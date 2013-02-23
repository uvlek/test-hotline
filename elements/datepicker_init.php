<link rel="stylesheet" media="all" type="text/css" href="css/jquery-ui.css" />
<link rel="stylesheet" media="all" type="text/css" href="lib/timepicker/jquery-ui-timepicker-addon.css" />

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="css/jquery-ui.min.js"></script>
<script type="text/javascript" src="lib/timepicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="lib/timepicker/jquery-ui-sliderAccess.js"></script>
<script type="text/javascript">
  
  $(function(){
    $('#date-time-picker').datetimepicker({
      addSliderAccess: true,
      sliderAccessArgs: { touchonly: false },
      timeText: 'Время',
      hourText: 'Часы',
      minuteText: 'Минуты',
      secondText: 'Секунды',
      currentText: 'Теперь',
      closeText: 'Закрыть',
      prevText: '<Пред',
      nextText: 'След>',
      currentText: 'Сейчас',
      monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
      'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
      monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
      'Июл','Авг','Сен','Окт','Ноя','Дек'],
      dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
      dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
      dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
      weekHeader: 'Не',
      dateFormat: 'yy-mm-dd',
      timeFormat: 'hh:mm:ss',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: '',
      timeOnlyTitle: 'Выберите время',
    });
  });
  
</script>
