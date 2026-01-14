// // Fetch all countries dynamically (using Intl API)
// const countries = Intl.supportedValuesOf('region')
//   .map(code => ({
//     name: new Intl.DisplayNames(['en'], { type: 'region' }).of(code),
//     code: code
//   }))
//   .filter(c => c.name);

// // Elements
// const select = document.querySelector('.custom-select');
// const selected = document.getElementById('selectedCountry');
// const optionsList = document.getElementById('countryOptions');
// const contactInput = document.getElementById('contact');

// // Populate dropdown alphabetically
// countries.sort((a, b) => a.name.localeCompare(b.name)).forEach(c => {
//   const li = document.createElement('li');
//   li.textContent = c.name;
//   li.dataset.code = c.code;
//   optionsList.appendChild(li);
// });

// let currentCode = "";

// // Toggle dropdown
// selected.addEventListener('click', () => {
//   select.classList.toggle('active');
// });

// // Handle selection
// optionsList.addEventListener('click', e => {
//   if (e.target.tagName === 'LI') {
//     selected.querySelector('span') 
//       ? selected.querySelector('span').textContent = e.target.textContent 
//       : selected.textContent = e.target.textContent;
//     select.classList.remove('active');
//   }
// });

// // Close dropdown when clicking outside
// window.addEventListener('click', e => {
//   if (!select.contains(e.target)) select.classList.remove('active');
// });

// // Restrict contact input to numbers only
// contactInput.addEventListener('input', () => {
//   contactInput.value = contactInput.value.replace(/\D/g, '');
// });


const countries = [
  { name: "Afghanistan", code: "+93" }, { name: "Albania", code: "+355" },
  { name: "Algeria", code: "+213" }, { name: "Andorra", code: "+376" },
  { name: "Angola", code: "+244" }, { name: "Argentina", code: "+54" },
  { name: "Armenia", code: "+374" }, { name: "Australia", code: "+61" },
  { name: "Austria", code: "+43" }, { name: "Azerbaijan", code: "+994" },
  { name: "Bahamas", code: "+1-242" }, { name: "Bahrain", code: "+973" },
  { name: "Bangladesh", code: "+880" }, { name: "Belgium", code: "+32" },
  { name: "Benin", code: "+229" }, { name: "Brazil", code: "+55" },
  { name: "Bulgaria", code: "+359" }, { name: "Burkina Faso", code: "+226" },
  { name: "Canada", code: "+1" }, { name: "Chile", code: "+56" },
  { name: "China", code: "+86" }, { name: "Colombia", code: "+57" },
  { name: "Croatia", code: "+385" }, { name: "Denmark", code: "+45" },
  { name: "Egypt", code: "+20" }, { name: "Finland", code: "+358" },
  { name: "France", code: "+33" }, { name: "Germany", code: "+49" },
  { name: "Ghana", code: "+233" }, { name: "Greece", code: "+30" },
  { name: "India", code: "+91" }, { name: "Indonesia", code: "+62" },
  { name: "Ireland", code: "+353" }, { name: "Israel", code: "+972" },
  { name: "Italy", code: "+39" }, { name: "Japan", code: "+81" },
  { name: "Kenya", code: "+254" }, { name: "Malaysia", code: "+60" },
  { name: "Mexico", code: "+52" }, { name: "Netherlands", code: "+31" },
  { name: "Nigeria", code: "+234" }, { name: "Norway", code: "+47" },
  { name: "Pakistan", code: "+92" }, { name: "Philippines", code: "+63" },
  { name: "Poland", code: "+48" }, { name: "Portugal", code: "+351" },
  { name: "Qatar", code: "+974" }, { name: "Russia", code: "+7" },
  { name: "Saudi Arabia", code: "+966" }, { name: "Singapore", code: "+65" },
  { name: "South Africa", code: "+27" }, { name: "South Korea", code: "+82" },
  { name: "Spain", code: "+34" }, { name: "Sweden", code: "+46" },
  { name: "Switzerland", code: "+41" }, { name: "Turkey", code: "+90" },
  { name: "Uganda", code: "+256" }, { name: "United Arab Emirates", code: "+971" },
  { name: "United Kingdom", code: "+44" }, { name: "United States", code: "+1" },
  { name: "Zambia", code: "+260" }, { name: "Zimbabwe", code: "+263" }
];

const select = document.getElementById('countrySelect');
const selected = document.getElementById('selectedCountry');
const optionsList = document.getElementById('countryOptions');
const contactInput = document.getElementById('contact');

// Populate dropdown with all countries
countries.sort((a, b) => a.name.localeCompare(b.name)).forEach(c => {
  const li = document.createElement('li');
  li.textContent = c.name;
  li.dataset.code = c.code;
  optionsList.appendChild(li);
});

let currentCode = "";

// Toggle dropdown on click
selected.parentElement.addEventListener('click', () => {
  select.classList.toggle('active');
});

// Handle selection
optionsList.addEventListener('click', e => {
  if (e.target.tagName === 'LI') {
    selected.textContent = e.target.textContent;
    currentCode = e.target.dataset.code + " ";
    contactInput.value = currentCode;
    select.classList.remove('active');
    contactInput.focus();
  }
});

// Prevent removing country code prefix
contactInput.addEventListener('input', () => {
  if (currentCode && !contactInput.value.startsWith(currentCode)) {
    contactInput.value = currentCode;
  }
});

// Close dropdown if clicked outside
window.addEventListener('click', e => {
  if (!select.contains(e.target)) {
    select.classList.remove('active');
  }
});

// ✅ Contact validation
const validationMessage = document.createElement("span");
validationMessage.className = "validation-message";
contactInput.parentNode.appendChild(validationMessage);

contactInput.addEventListener("input", () => {
  const value = contactInput.value.trim();
  const regex = /^\+\d[\d\s]{9,16}$/;

  // Show nothing until at least 4 characters are typed
  if (value.length < 4) {
    validationMessage.textContent = "";
    contactInput.style.borderColor = "#ccc";
    return;
  }

  if (regex.test(value)) {
    validationMessage.textContent = "✅ Valid contact number";
    validationMessage.style.color = "#0b1e3f";
    contactInput.style.borderColor = "#0b1e3f";
  } else {
    validationMessage.textContent = "❌ Invalid — must start with +country code and include 10-14 digits total";
    validationMessage.style.color = "#fb4d46";
    contactInput.style.borderColor = "#fb4d46";
  }
});
