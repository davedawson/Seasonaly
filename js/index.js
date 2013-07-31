$(window).load(function(){
  var seasonaly = {
    whatDay: function(){
      function getTodaysDate() {
        var d = new Date();
        var month=new Array();
        month[0]="Jan";
        month[1]="Feb";
        month[2]="Mar";
        month[3]="Apr";
        month[4]="May";
        month[5]="Jun";
        month[6]="Jul";
        month[7]="Aug";
        month[8]="Sep";
        month[9]="Oct";
        month[10]="Nov";
        month[11]="Dec";
        var thisMonth = month[d.getMonth()] + " " + d.getDate();
        // Use this time
        $('.today strong').html(thisMonth.toString());
      }
      function getTodaysDay(){
          var d = new Date();
          var weekday=new Array(7);
          weekday[0]="Sunday";
          weekday[1]="Monday";
          weekday[2]="Tuesday";
          weekday[3]="Wednesday";
          weekday[4]="Thursday";
          weekday[5]="Friday";
          weekday[6]="Saturday";
          // var x = document.getElementById("demo");
          // x.innerHTML=weekday[d.getDay()];
          $('.today em').html(weekday[d.getDay()]);
        }
      getTodaysDate();
      getTodaysDay();
    },

    explain: function(){
      $('.explanation').hide();
      $(".explain").on('click', function(e) {
        $('.explanation').slideToggle('fast');
      });
    },
  };

  /*-------------------------------------------
      Initial Actions
  -------------------------------------------*/

  // seasonaly.pullFood();
  seasonaly.whatDay();
  // seasonaly.moreInfo();
  seasonaly.explain();
});

function moreInfo() {
  $('#food-list .more-info').hide();
  $("#food-list li a").on('click', function(e) {
    console.log('test')
    $('#food-list .more-info').slideUp('fast');
    $(this).find('.more-info').slideToggle('fast');
    e.preventDefault();
    return false;
  });
}

function hideRotten() {

}