document.addEventListener('lp_register_form_submitted', function() {
    console.log("submit");
    var modal = document.getElementById('container-thanks')
    var overlay = document.getElementById('overlay');
    modal.style.display = "block";
    overlay.style.display = "block";
	
	
    gtag('event', 'conversion', {'send_to': 'AW-11125320572/bIA_CLrT2u4YEPzW-7gp'});
    //  <!-- Meta Pixel Code -->
    !function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1027222238325758');
fbq('track', 'Lead');

var pixelImage = document.createElement('img');
pixelImage.height = 1;
pixelImage.width = 1;
pixelImage.style.display = 'none';
pixelImage.src = 'https://www.facebook.com/tr?id=1027222238325758&ev=PageView&noscript=1';
document.body.appendChild(pixelImage);
// <!-- End Meta Pixel Code -->


});




window.onclick = function(event) {
  var modal = document.getElementById('container-thanks')
  var modalicon = document.getElementById('thank-you-icon')
  if (event.target == modal || event.target == modalicon || event.target == overlay) {
    modal.style.display = "none";
    overlay.style.display = "none";
      }
      
    }