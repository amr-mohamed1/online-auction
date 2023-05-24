//select all <section> tags and store them in 'sections' variable
let sections = document.querySelectorAll("section");
//create an array from the sections
const sectionsArr = Array.from(sections);
//get the navbar <ul> element using its 'id' and store it in variable 
const navBarList = document.getElementById('navbar__list');
/**
 * End Global Variables
 * Start Helper Functions
 * 
*/
function create_li(){
    //loop over sections array
    for(section of sectionsArr){
        //get section name from 'data-nav' attribute
        secName = section.getAttribute('data-nav');
        //get section link from 'id' attribute
        secLink = section.getAttribute('id');
        //create li for each section
        listItem = document.createElement('li');
        /*specify the <li> content (link to the section id)
         *class 'menu__link' to add the css style
         *             
        */ 
        listItem.innerHTML = `<a href="#${secLink}" class="menu__link">${secName}</a>`;
        //add listItem to the unordered list
        //(add the <li> in the <ul>)
        navBarList.appendChild(listItem);
    }
}

//determine if the section in the viewport
function sectionInViewPort(element){
    //Detect the element location relative to the viewport
    let sectionPos=element.getBoundingClientRect();
    return (sectionPos.top >= 0);
}

//give the section being viewed a different appearance  
function AddActiveClass(){
    for(section of sectionsArr){
        //if the section is in the viewport and it does not already contains "your-active-class"
        if(sectionInViewPort(section)&&(!section.classList.contains('your-active-class'))){
                //add "your-active-class"
                section.classList.add('your-active-class');
        }
        //if the section is not in the viewport
        else{
            //remove "your-active-class"
            section.classList.remove('your-active-class');        
        }
    }
}



// build the nav
create_li();

// Add class 'active' to section when near top of viewport
document.addEventListener("scroll",AddActiveClass);
/**
 * End Main Functions
 * 
*/
