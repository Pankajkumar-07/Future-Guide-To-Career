// script.js

// --- Dark Mode Toggle (persist in localStorage) ---
const toggle = document.getElementById('darkToggle');
function applyTheme(theme){
    if(theme === 'dark') {
        document.documentElement.classList.add('dark');
        document.body.classList.add('dark');
        toggle.innerText='Light';
        toggle.setAttribute('aria-pressed','true');
    } else {
        document.documentElement.classList.remove('dark');
        document.body.classList.remove('dark');
        toggle.innerText='Dark';
        toggle.setAttribute('aria-pressed','false');
    }
}
const saved = localStorage.getItem('fg_theme') || 'light';
applyTheme(saved);
toggle.addEventListener('click', ()=>{
    const cur = document.body.classList.contains('dark') ? 'dark' : 'light';
    const next = cur === 'dark' ? 'light' : 'dark';
    localStorage.setItem('fg_theme', next);
    applyTheme(next);
});


// --- Modal Helper ---
function openModal(which){
    const wrapper = document.getElementById('modalWrapper');
    const content = document.getElementById('modalContent');
    wrapper.style.display = 'flex';
    let html = '';
    
    if(which === 'loginModal'){
        html = `
            <h3>Login</h3>
            <form method="post" action="index.php">
                <input type="hidden" name="action" value="login">
                <div style="margin:8px 0"><label style="font-size:13px">Email or Username</label><input name="email_or_user" required style="width:100%;padding:8px;border-radius:8px;"></div>
                <div style="margin:8px 0"><label style="font-size:13px">Password</label><input type="password" name="password" required style="width:100%;padding:8px;border-radius:8px;"></div>
                <div style="display:flex;gap:8px;justify-content:flex-end;margin-top:8px"><button type="button" onclick="closeModal()" style="padding:8px 10px;border-radius:8px">Cancel</button><button style="padding:8px 12px;border-radius:8px" type="submit">Login</button></div>
            </form>
        `;
    } else {
        html = `
            <h3>Register</h3>
            <form method="post" action="index.php">
                <input type="hidden" name="action" value="register">
                <div style="margin:8px 0"><label style="font-size:13px">Username</label><input name="username" required style="width:100%;padding:8px;border-radius:8px;"></div>
                <div style="margin:8px 0"><label style="font-size:13px">Email</label><input name="email" type="email" required style="width:100%;padding:8px;border-radius:8px;"></div>
                <div style="margin:8px 0"><label style="font-size:13px">Password</label><input type="password" name="password" required style="width:100%;padding:8px;border-radius:8px;"></div>
                <div style="display:flex;gap:8px;justify-content:flex-end;margin-top:8px"><button type="button" onclick="closeModal()" style="padding:8px 10px;border-radius:8px">Cancel</button><button style="padding:8px 12px;border-radius:8px" type="submit">Register</button></div>
            </form>
        `;
    }
    content.innerHTML = html;
    // allow clicking overlay to close
    wrapper.onclick = function(e){ if(e.target === wrapper) closeModal(); }
}

function closeModal(){ document.getElementById('modalWrapper').style.display = 'none'; }


// --- Image Slider Logic ---
let index = 0;
let total = 6; // Total number of slides

function updateDots() {
    let dots = document.querySelectorAll(".dot");
    dots.forEach((d, i) => d.classList.toggle("active", i === index));
}

function showSlide(i) {
    // Ensure index is within bounds [0, total-1]
    index = (i + total) % total; 
    document.getElementById("slideBox").style.marginLeft = `-${index * 100}%`;
    updateDots();
}

function nextSlide() {
    showSlide(index + 1);
}

// Global scope function for onclick handlers in HTML
window.goToSlide = showSlide;
window.openModal = openModal;
window.closeModal = closeModal;


// Auto-advance slider every 3 seconds
setInterval(nextSlide, 3000); 

// Initial call to set up dots correctly
document.addEventListener('DOMContentLoaded', updateDots);


//social icon 
sci.classList.toggle('active');