//page sections
let about = document.getElementById('about');
let projects = document.getElementById('projects');
let work = document.getElementById('work');
let education = document.getElementById('education');
let contact = document.getElementById('contact');
let login = document.getElementById('login');
let register = document.getElementById('register');
let home = document.getElementById('home');

//popup windows
let popup = document.getElementById('popup');

//popup exit button
let exit = document.getElementById('exit');

//popitems - general
let popItem = document.getElementsByClassName('popItem');

//popup items
let aboutPage = document.getElementById('aboutPage');
let projectsPage = document.getElementById('projectsPage');
let workPage = document.getElementById('workPage');
let educationPage = document.getElementById('educationPage');
let contactPage = document.getElementById('contactPage');
let loginPage = document.getElementById('loginPage');
let registerPage = document.getElementById('registerPage');
let homePage = document.getElementById('homePage');

//event handlers for popItems
about.onclick = function () {
    popup.style.display = 'block';
    exit.style.display = 'block';

    if (projectsPage.style.display == 'block') {
      projectsPage.style.display = 'none';
    } else if (workPage.style.display == 'block') {
      workPage.style.display = 'none';
    } else if (educationPage.style.display == 'block') {
      educationPage.style.display = 'none';
    } else if (contactPage.style.display == 'block') {
      contactPage.style.display = 'none';
    } else if (loginPage.style.display == 'block') {
      loginPage.style.display = 'none';
    } else if (registerPage.style.display == 'block') {
      registerPage.style.display = 'none';
    }
    aboutPage.style.display = 'block';
};


projects.onclick = function () {

  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (workPage.style.display == 'block') {
    workPage.style.display = 'none';
  } else if (educationPage.style.display == 'block') {
    educationPage.style.display = 'none';
  } else if (contactPage.style.display == 'block') {
    contactPage.style.display = 'none';
  } else if (loginPage.style.display == 'block') {
    loginPage.style.display = 'none';
  } else if (registerPage.style.display == 'block') {
    registerPage.style.display = 'none';
  }
  projectsPage.style.display = 'block';
};


work.onclick = function () {
  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (projectsPage.style.display == 'block') {
    projectsPage.style.display = 'none';
  } else if (educationPage.style.display == 'block') {
    educationPage.style.display = 'none';
  } else if (contactPage.style.display == 'block') {
    contactPage.style.display = 'none';
  } else if (loginPage.style.display == 'block') {
    loginPage.style.display = 'none';
  } else if (registerPage.style.display == 'block') {
    registerPage.style.display = 'none';
  }
  workPage.style.display = 'block';
};

education.onclick = function () {
  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (projectsPage.style.display == 'block') {
    projectsPage.style.display = 'none';
  } else if (workPage.style.display == 'block') {
    workPage.style.display = 'none';
  } else if (contactPage.style.display == 'block') {
    contactPage.style.display = 'none';
  } else if (loginPage.style.display == 'block') {
    loginPage.style.display = 'none';
  } else if (registerPage.style.display == 'block') {
    registerPage.style.display = 'none';
  }
  educationPage.style.display = 'block';
};

contact.onclick = function () {
  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (projectsPage.style.display == 'block') {
    projectsPage.style.display = 'none';
  } else if (workPage.style.display == 'block') {
    workPage.style.display = 'none';
  } else if (educationPage.style.display == 'block') {
    educationPage.style.display = 'none';
  } else if (loginPage.style.display == 'block') {
    loginPage.style.display = 'none';
  } else if (registerPage.style.display == 'block') {
    registerPage.style.display = 'none';
  }
  contactPage.style.display = 'block';
};

login.onclick = function () {
  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (projectsPage.style.display == 'block') {
    projectsPage.style.display = 'none';
  } else if (workPage.style.display == 'block') {
    workPage.style.display = 'none';
  } else if (educationPage.style.display == 'block') {
    educationPage.style.display = 'none';
  } else if (contactPage.style.display == 'block') {
    contactPage.style.display = 'none';
  } else if (registerPage.style.display == 'block') {
    registerPage.style.display = 'none';
  }
  loginPage.style.display = 'block';
};

register.onclick = function () {
  popup.style.display = 'block';
  exit.style.display = 'block';

  if (aboutPage.style.display == 'block') {
    aboutPage.style.display = 'none';
  } else if (projectsPage.style.display == 'block') {
    projectsPage.style.display = 'none';
  } else if (workPage.style.display == 'block') {
    workPage.style.display = 'none';
  } else if (educationPage.style.display == 'block') {
    educationPage.style.display = 'none';
  } else if (contactPage.style.display == 'block') {
    contactPage.style.display = 'none';
  } else if (loginPage.style.display == 'block') {
    loginPage.style.display = 'none';
  }
  registerPage.style.display = 'block';
};


//exit button event handler
function exitClick() {
  popup.style.display = 'none';
}

exit.addEventListener ('click', exitClick);
