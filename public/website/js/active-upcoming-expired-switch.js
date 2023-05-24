// $(document).ready(function(){
//     $("#acc").click(function(){
//       $(".active").toggle();
//     });
//   });


var display = function(block_name, title) {
    // Toogle Block
    $('.middleBlock').css('display', 'none');
    $('#' + block_name + '').css('display', 'block');
  
    // Change Title Color
    $('.menu').removeClass('active');
    $(title).addClass('active');
}


$('#acc').on('click', function() {
    display('acttt', $(this));
});
  
$('#up').on('click', function() {
    display('uppp', $(this));
});
  
$('#ex').on('click', function() {
    display('exppp', $(this));
});





// function switchVisible1() {
//     if (document.getElementById('acttt')) {

//         if (document.getElementById('acttt').style.display == 'none') {
//             document.getElementById('acttt').style.display = 'block';
//             document.getElementById('uppp').style.display = 'none';
//             document.getElementById('exppp').style.display = 'none';

//         }

//     }
// }

// function switchVisible2() {
//     if (document.getElementById('uppp')) {

//         if (document.getElementById('uppp').style.display == 'none') {
//             document.getElementById('uppp').style.display = 'block';
//             document.getElementById('acttt').style.display = 'none';
//             document.getElementById('exppp').style.display = 'none';
//         }
//     }
// }

// function switchVisible3() {
//     if (document.getElementById('exppp')) {

//         if (document.getElementById('exppp').style.display == 'none') {
//             document.getElementById('exppp').style.display = 'block';
//             document.getElementById('acttt').style.display = 'none';
//             document.getElementById('uppp').style.display = 'none';

//         }

//     }
// }


