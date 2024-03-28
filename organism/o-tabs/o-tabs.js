
const getDataAttribute = (element) => {
  const dataTab = element.getAttribute('data-tab')
  const getIdDataBody = document.querySelector(`#${dataTab}`)
  
  const getAllDataBody = document.querySelectorAll('.o-tabs__body')
  getAllDataBody.forEach((body) => {
    body.classList.remove('o-tabs__body--active')
  })

  if(getIdDataBody){
    getIdDataBody.classList.add('o-tabs__body--active')
  }

}

const triggerTag = (getAllTabsElements) => {

  getAllTabsElements.forEach((tab) => {
    tab.addEventListener('click', (event) => {

      getDataAttribute(event.currentTarget)

      getAllTabsElements.forEach((tab) => {
        tab.classList.remove('o-tabs__item--active')
      })

      tab.classList.add('o-tabs__item--active')
    
    })
  })
}


window.addEventListener('DOMContentLoaded', () => {

  const getAllTabsElements = document.querySelectorAll('.o-tabs__item')
  if(getAllTabsElements){
    triggerTag(getAllTabsElements)
  }

})