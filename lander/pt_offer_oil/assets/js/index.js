AOS.init();

const headerCounter = document.querySelectorAll('.header_counter');

const usersInterval = setInterval(() => {
  let currVal = headerCounter[0].innerText;
  if (currVal >= 2) {
    let decreaseVal = 1;
    if (Math.random() > 0.7) {
      decreaseVal = 2;
    }
    currVal = +currVal - decreaseVal;
    headerCounter[0].innerHTML = currVal;
  } else {
    clearInterval(usersInterval);
  }
}, 5000);

const stepsTextWrapper = document.querySelectorAll('.step_itemWrp');
const stepsIllustrations = document.querySelectorAll('.step_img');
const removeActiveClass = () => {
  stepsTextWrapper.forEach((item) => {
    item.classList.remove('active');
  });
  stepsIllustrations.forEach((item) => {
    const el = item;
    el.classList.remove('active');
    el.style.transform = 'translateY(-100px)';
  });
};
if (window.innerWidth > 767) {
  $('.step_itemWrp.step1').click(() => {
    removeActiveClass();
    $('.step1').addClass('active');
    $('.step_img.step1').css('transform', 'translateY(0px)');
  });
  $('.step_itemWrp.step2').click(() => {
    removeActiveClass();
    $('.step2').addClass('active');
    $('.step_img.step2').css('transform', 'translateY(0px)');
  });
  $('.step_itemWrp.step3').click(() => {
    removeActiveClass();
    $('.step3').addClass('active');
    $('.step_img.step3').css('transform', 'translateY(0px)');
  });
}

const { lang } = document.querySelector('html');

const getCurrency = (langValue) => {
  switch (langValue) {
    case 'pt': {
      return 'R$ ';
    }

    case 'de': {
      return '$ ';
    }

    default: {
      return '$ ';
    }
  }
};

const getRangeSettings = (langValue) => {
  switch (langValue) {
    case 'pt': {
      return [1330, 5e4, 25250];
    }

    default: {
      return [250, 1e4, 5125];
    }
  }
};

const getRangePostfix = (langValue) => {
  switch (langValue) {
    case 'pt': {
      return ' dias';
    }

    default: {
      return ' days';
    }
  }
};

const depositRange = document.querySelector('.control__dep');
const daysRange = document.querySelector('.control__days');
const resultSum = document.querySelector('.output__earn');
const resultRev = document.querySelector('.output__revenue');
const resultProf = document.querySelector('.output__profitability');
const currency = getCurrency(lang);
const funnelLang = document.querySelector('html').lang;

function updateAllInputResults() {
  const sum = depositRange.value;
  const days = daysRange.value;
  let coeficient = days / 12;
  let profitability = sum / 4;

  if (days > 30) {
    coeficient *= 8;
    profitability *= 2;
  }

  coeficient++;

  if (funnelLang === 'nl') {
    resultSum.innerText = `${currency}${Math.round(sum * 8 * coeficient)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`;
    resultRev.innerText = `${currency}${(Math.round(sum * 8 * coeficient) - sum)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`;
    resultProf.innerText = `${Math.round(profitability)}%`;
  } else {
    resultSum.innerText = `${Math.round(sum * 8 * coeficient)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}${currency}`;
    resultRev.innerText = `${(Math.round(sum * 8 * coeficient) - sum)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}${currency}`;
    resultProf.innerText = `${Math.round(profitability)}%`;
  }
}

const [reng1, reng2, fromValue] = getRangeSettings(lang);

$('.control__dep').ionRangeSlider({
  min: reng1,
  max: reng2,
  from: fromValue,
  onChange(data) {
    updateAllInputResults(data);
  },
});

$('.control__days').ionRangeSlider({
  min: 1,
  max: 90,
  from: 45,
  postfix: getRangePostfix(lang),
  onChange(data) {
    updateAllInputResults(data);
  },
});

const scrollToElement = (elSelector, triggerSelector) => {
  const el = document.querySelector(elSelector);
  const triggers = document.querySelectorAll(triggerSelector);

  const callback = (item) => {
    item.addEventListener('click', (event) => {
      event.preventDefault();

      el.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
      });
    });
  };

  triggers.forEach(callback);
};

scrollToElement('#form', '.scrollToForm');
scrollToElement('#form', 'a[href=\'#form\']');

const yearDisclaimerNew = new Date();

document.getElementById('yearDisclaimerNext').innerHTML = yearDisclaimerNew.getFullYear();
document.querySelectorAll('.disclaimer-brand_name__new').forEach((item) => {
  const brandName = item;
  brandName.innerHTML = window.location.hostname;
});
