// Fake Data
// ===============================
const stickerBarCodeData = [
  {
    id: 1005005,
    code: Math.random()*100000
  },
  {
    id: 1005006,
    code: Math.random()*100000
  },
  {
    id: 1005007,
    code: Math.random()*100000
  }
];
const cartridgeData = [
  {
    id: 1004005,
    name: 'randomName1',
    relatedBarCodeId: 1005005,
  },
  {
    id: 1004006,
    name: 'randomName2',
    relatedBarCodeId: 1005006,
  },
  {
    id: 1004007,
    name: 'randomName3',
    relatedBarCodeId: 1005007,
  },
];
const boxBarCodeData = [
  {
    id: 1003005,
    code: Math.random()*100000,
    contentId: 1005005
  },
  {
    id: 1003006,
    code: Math.random()*100000,
    contentId: 1005006
  },
  {
    id: 1003007,
    code: Math.random()*100000,
    contentId: 1005007
  }
];
// ===============================

const loadData = (tabValue) => {
  switch(tabValue) {
    case 'tabBoxBarCode':
      return boxBarCodeData;
      break;
    case 'tabStickerBarCode':
      return stickerBarCodeData;
    break;
    default:
      return cartridgeData;
  }
}

let activeTab = 'tabCartWrightType';

$('.tab').on('click', (e) => {
  activeTab = e.target.value;
  $('.tab').removeClass('active');
  e.target.classList.add('active');
});


const autoCompleteModule = new autoComplete({
            selector: "#autoComplete",
            placeHolder: "Ex: 24486715338",
            data: {
                src: loadData(activeTab),
                cache: true,
            },
            resultsList: {
                element: (list, data) => {
                    if (!data.results.length) {
                        // Create "No Results" message element
                        const message = document.createElement("div");
                        // Add class to the created element
                        message.setAttribute("class", "no_result");
                        // Add message text content
                        message.innerHTML = `<span>Found No Results for "${data.query}"</span>`;
                        // Append message element to the results list
                        list.prepend(message);
                    }
                },
                noResults: true,
            },
            resultItem: {
                highlight: true
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS.input.value = selection;
                    }
                }
            }
        });