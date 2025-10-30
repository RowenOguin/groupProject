// mobile menu toggle
document.addEventListener('click', function(e){
  const btn = e.target.closest('.mobile-menu-btn');
  if(btn){
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!expanded));
    const menu = document.getElementById('mobileMenu');
    if(menu){
      if(!expanded){
        menu.hidden = false;
      } else {
        menu.hidden = true;
      }
    }
  }
});

// simple contact form submit (front-end only)
const contactForm = document.getElementById('contactForm');
if(contactForm){
  contactForm.addEventListener('submit', function(e){
    e.preventDefault();
    const msg = document.getElementById('contactMsg');
    msg.textContent = 'Sending message...';
    // fake delay then show success
    setTimeout(()=> {
      msg.textContent = 'Thanks! Your message has been received. We will contact you shortly.';
      contactForm.reset();
    }, 800);
  });
}

// login form
const loginForm = document.getElementById('loginForm');
if(loginForm){
  loginForm.addEventListener('submit', function(e){
    e.preventDefault();
    const msg = document.getElementById('loginMsg');
    const email = document.getElementById('emailLogin').value.trim();
    const pass = document.getElementById('passwordLogin').value;
    if(!email || !pass || pass.length < 6){
      msg.textContent = 'Please enter a valid email and password (min 6 chars).';
      return;
    }
    // fake login
    msg.textContent = 'Signing in...';
    setTimeout(()=> {
      msg.textContent = 'Signed in (demo). Redirecting to dashboard...';
      // redirect demo to index
      setTimeout(()=> window.location.href = 'index.html', 700);
    }, 700);
  });
}

// register form
const registerForm = document.getElementById('registerForm');
if(registerForm){
  registerForm.addEventListener('submit', function(e){
    e.preventDefault();
    const msg = document.getElementById('registerMsg');
    const name = document.getElementById('fullName').value.trim();
    const email = document.getElementById('emailReg').value.trim();
    const pass = document.getElementById('passwordReg').value;
    const confirm = document.getElementById('confirmPassword').value;
    if(!name || !email || pass.length < 6 || pass !== confirm){
      msg.textContent = 'Please complete all fields and ensure passwords match (min 6 chars).';
      return;
    }
    msg.textContent = 'Creating account...';
    setTimeout(()=> {
      msg.textContent = 'Account created (demo). You may sign in now.';
      registerForm.reset();
    }, 900);
  });
}
