 rangeSliderInit();

  function rangeSliderInit() {
      const isDynamic = true;
      const showEachStepLabels = false;
      const minMaxRow = true;
      const cutZerosMobileTopPart = true;
      const cutZerosMobileMinMaxRow = false;
      const bottomBox = true;
      const hideMaxValue = true;
      const minValue = 250;
      const maxValue = 20000;
      const stepSize = 50;
      let arrayNumbers = [];
      let bottomText = '';

                      bottomText = 'الربح المحتمل'
      
      if (isDynamic) {
          arrayNumbers = generateDynamicArray(minValue, maxValue, stepSize);
      } else {
          arrayNumbers = [0,2000,5000,10000,20000];
      }

      const isCustomScrollEvent = '1';
      const currencySymbol = '$';
      const slider = document.querySelector('#counter-slider .slider');
      const windowWidth = document.documentElement.clientWidth;
      const isMobile = windowWidth <= 960;

      showEachStepLabels && generateSliderLabels(arrayNumbers);
      minMaxRow && generateMinMaxRow();
      bottomBox && generateBottomBox();

      noUiSlider.create(slider, {
          start: 0,
          step: 1,
          connect: "lower",
          range: {
              'min': 0,
              'max': arrayNumbers.length - 1
          },
      });

      slider.noUiSlider.on('update', function (values) {
          const valuenow = parseInt(values[0]);
          showEachStepLabels && highlightLabel(valuenow);
          calculation(valuenow);
      });

      function calculation(valuenow) {

          const valueActiveItem = arrayNumbers[valuenow];

          let coefficient = 0;

          if (valueActiveItem === 250) {
              coefficient = 2;
          } else if (valueActiveItem > 250 && valueActiveItem < 500) {
              coefficient = 2.5;
          } else if (valueActiveItem >= 500 && valueActiveItem < 1000) {
              coefficient = 3.5;
          } else if (valueActiveItem >= 1000 && valueActiveItem < 5000) {
              coefficient = 5;
          } else if (valueActiveItem >= 5000) {
              coefficient = 5.5;
          }


          const initialValue = document.querySelector('.range-initial-value');
          initialValue.textContent = formatNumber(valueActiveItem, cutZerosMobileTopPart) + currencySymbol;


          /*const result = potencialCalc(valueActiveItem, coefficient);*/
          const result = formulaCalc(valueActiveItem);
          const potentialProfit = document.querySelector('.range-potential-profit');
          const bottomProfitBox = document.querySelector('#bottom-profit');
          const profitValue = formatNumber(result, cutZerosMobileTopPart) + currencySymbol;

          
                              bottomProfitBox.textContent = profitValue;
          
                              updateRangeLabel(+valueActiveItem, currencySymbol);
          
      }

      function potencialCalc(number, multiply) {
          return (number * multiply) % 1 === 0 ? number * multiply : (number * multiply).toFixed(2);
      }

      function formulaCalc(number){
          const result = 5.13 * number + 24;
          return result % 1 === 0 ? result : result.toFixed(2);
      }

      function generateBottomBox(){
          const bottomBox = `
              <div class="r-slider__bottom">
                  <span class="r-slider__title">${bottomText}</span>
                  <span id="bottom-profit" class="r-slider__subtitle"></span>
              </div>
          `
          const wrapper = document.querySelector(".range");
          wrapper.insertAdjacentHTML('afterEnd', bottomBox);
      }

      function generateSliderLabels(arrayNumbers) {

          const listWrapper = document.querySelector('.slider-labels');
          let numbers = '';

          arrayNumbers.forEach(item => {
            numbers += `<li data-number="${item}">${formatNumber(item, cutZerosMobileTopPart)+currencySymbol}</li>`;
          });

          listWrapper.insertAdjacentHTML('beforeend',numbers);
      }

      function updateRangeLabel(value){
          const rangeLabel = document.querySelector('.noUi-touch-area');
          rangeLabel.innerHTML = formatNumber(value, cutZerosMobileTopPart)+currencySymbol;
      }

      function formatNumber(number, cutZeros) {
          var numberFormat = Intl.NumberFormat('en-US').format(number);

          if (isMobile && cutZeros && number >= 1000) {
              return Math.round(number / 100) / 10 + 'k';
          }

          if (!isMobile && 'en' === 'it') {
              if (number >= 10000) {
                  return Intl.NumberFormat('it-IT').format(number);
              }

              return String(number).replace(/[.]/g, ',');
          }

          if (!isMobile && number >= 10000) {
              return numberFormat;
          }


          return number;
      }

      function generateDynamicArray(min, max, stepSize){
          const arrayLength = (max - min) / stepSize;
          return [...Array(arrayLength + 1)]
              .map((x, y) => min + stepSize * y);
      }

      function highlightLabel(currentIndex) {
          const textCurrency = document.querySelectorAll('#counter-slider .slider-labels li');

          textCurrency.forEach(item => {
              item.classList.remove('active');
          });

          const index = currentIndex + 1;
          const selector = '#counter-slider .slider-labels li:nth-child(' + index + ')';
          document.querySelector(selector).classList.add('active');
      }

      function generateMinMaxRow() {
        const minMaxRow = `
          <div class="range_min-max">
            <div class="range_min-max__item range_min-max__item_min">
                ${formatNumber(arrayNumbers[0], cutZerosMobileMinMaxRow)+currencySymbol}
            </div>
            <div class="range_min-max__item range_min-max__item_max">
                ${formatNumber(arrayNumbers[arrayNumbers.length -1 ], cutZerosMobileMinMaxRow)+currencySymbol}
            </div>
          </div>
        `;
        document.querySelector('.range-slider').insertAdjacentHTML('beforeend', minMaxRow);
      }

      function scrollToForm(form) {
          $('html, body').animate({
              scrollTop: $(form).offset().top - 50
          }, 500);
      }

      if(!isCustomScrollEvent){
          document.addEventListener('click', function(e){
              if(e.target.className === 'r-slider__bottom' || e.target.className === 'r-slider__subtitle'){
                  const form = document.querySelector('#formWrapper1');
                  scrollToForm(form);
              }
          })
      }


  }