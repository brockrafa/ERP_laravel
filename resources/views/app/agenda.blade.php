@extends('layouts.layout_default')
@section('conteudo')
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      displayEventTime: false,
      editable:true,
      locale:'pt-br',
      selectable:true,
      businessHours: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,listYear'
      },
      events: [
        {
          'title':'Estudar',
          'start':'2022-06-17',
          'end':'2022-06-19'
        },
        {
          'title':'Prova',
          'start':'2022-06-19'
        },
        {
          'title':'Prova',
          'start':'2022-06-16'
        },
        {
          'title':'Prova',
          'start':'2022-06-14'
        },
        {
          'title':'Prova',
          'start':'2022-06-16'
        },
        {
          'title':'Prova',
          'start':'2022-06-16'
        },
        {
          'title':'Prova',
          'start':'2022-06-16'
        }
      ]
      
    });

    calendar.render();
  });
</script>
<style>


  #script-warning {
    display: none;
    background: #eee;
    border-bottom: 1px solid #ddd;
    padding: 0 10px;
    line-height: 40px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    color: red;
  }

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 10px;
  }

</style>
</head>
<div class="quadro-exibicao">

  <div id='calendar'></div>

</div>
@endsection