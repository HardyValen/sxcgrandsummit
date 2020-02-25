var count = 1;
var incButton = document.querySelector("#increment");
var decButton = document.querySelector("#decrement");
decButton.style.display = "none";

function increment() {
  if(count < 3){
    count++;
    document.querySelector("#members").value = count;

    if(count == 3){
      incButton.style.display = "none";
    }

    if(count == 2){
      decButton.style.display = "block";
    }

    var node = document.createElement("div");
    node.innerHTML = `` + 
    `<div class='registration-input-group'>` +
      `<p class='group-header'>APPLICANT ${count}</p>` +
      `<div class='registration-input'>` +
        `<input type='text' class='form-input' name='name${count}' id='name${count}' placeholder=' ' required/>` +
        `<label class='text-label' for='name${count}'>Applicant Name</label>` +
      `</div>` +

      `<div class='registration-input-row'>` +
        `<div class='registration-input-col'>` +
          `<div class='registration-radio-wrapper'>` +
            `<p class='radio-header'>Gender</p>` +
            `<label>` +
              `<span class='radio-description'>Male</span>` +
              `<input type='radio' class='individual-radio' name='gender${count}' value='Male' checked>` +
              `<span class='radio-button'><span></span></span>` +
            `</label>` +
            `<label>` +
              `<span class='radio-description'>Female</span>` +
              `<input type='radio' class='individual-radio' name='gender${count}' value='Female'>` +
              `<span class='radio-button'><span></span></span>` +
            `</label>` +
            `<label>` +
              `<span class='radio-description'>Other</span>` +
              `<input type='radio' class='individual-radio' name='gender${count}' value='Other'>` +
              `<span class='radio-button'><span></span></span>` +
            `</label>` +
          `</div>` +
        `</div>` +
        `<div class='registration-input-col flex-justify-center'>` +
          `<div class='registration-input'>` +
            `<input type='number' class='form-input display-inline-block' name='age${count}' id='age${count}' placeholder=' ' min='0' max='${count}00' required/> ` +
            `<label class='text-label' for='age${count}'>Age</label>` +
            `<span class='paragraph'>Years Old</span>` +
          `</div>` +
        `</div>` +
      `</div>` +

     `<div class="registration-input-row">` +
            `<div class="registration-input-col">` +
              `<div class="registration-radio-wrapper">` +
                `<p class='radio-header'>Chamber Selection</p>` +
                `<label>` +
                    `<span class='radio-description'>Quality Education</span>` +
                    `<input type="radio" class="individual-radio" name="ch_selection${count}" value="QED" checked>` +
                    `<span class='radio-button'><span></span></span>` +
                `</label>` +
                `<label>` +
                    `<span class='radio-description'>Decent Work and Economic Growth</span>` +
                    `<input type="radio" class="individual-radio" name="ch_selection${count}" value="DWAndEG">` +
                    `<span class='radio-button'><span></span></span>` +
                `</label>` +
                `<label>` +
                    `<span class='radio-description'>Climate Action</span>` +
                    `<input type="radio" class="individual-radio" name="ch_selection${count}" value="CA">` +
                    `<span class='radio-button'><span></span></span>` +
                `</label>` +
              `</div>` +
            `</div>` +
          `</div>` +

      `<div class='registration-input'>` +
        `<input type='email' class='form-input' name='email${count}' id='email${count}' placeholder=' ' required/>` +
        `<label class='text-label' for='email${count}'>Email</label>` +
      `</div>` +

      `<div class='registration-input-row'>` +
        `<div class='registration-input-col'>` +
          `<div class='registration-input'>` +
            `<input type='text' class='form-input' name='line${count}' id='line${count}' placeholder=' ' required/>` +
            `<label class='text-label' for='line${count}'>Line</label>` +
          `</div>` +
        `</div>` +
        `<div class='registration-input-col'>` +
          `<div class='registration-input'>` +
            `<input type='text' class='form-input' name='phone${count}' id='phone${count}' placeholder=' ' required/>` +
            `<label class='text-label' for='phone${count}'>Phone Number</label>` +
          `</div>` +
        `</div>` +
      `</div>` +

      `<div class='registration-input'>` +
        `<input type='text' class='form-input' name='major${count}' id='major${count}' placeholder=' ' required/>` +
        `<label class='text-label' for='major${count}'>Major</label>` +
      `</div>` +

      `<div class="registration-input">` +
        `<input type="text" class="form-input" name="university${count}" id="university${count}" placeholder=' ' required/>` +
        `<label class="text-label" for="university${count}">University</label>` +
      `</div>` +

      `<div class='registration-input-row'>` +
        `<div class='registration-input-col'>` +
          `<div class='registration-input'>` +
            `<input type='text' class='form-input' name='batch${count}' id='batch${count}' placeholder=' ' required/>` +
            `<label class='text-label' for='batch${count}'>Batch / Entry Year</label>` +
          `</div>` +
        `</div>` +
        `<div class='registration-input-col'>` +
          `<div class='registration-input'>` +
            `<input type='text' class='form-input' name='KTM${count}' id='KTM${count}' placeholder=' ' required/>` +
            `<label class='text-label' for='KTM${count}'>Student ID Number</label>` +
          `</div>` +
        `</div>` +
      `</div>` +

    `</div>` +
    `<hr style='background-color: #aaaaaa'>`;
    document.querySelector(".registration-content").appendChild(node);
  }
}

function decrement(){
  if(count > 1){
    count--;
    document.querySelector("#members").value = count;

    if(count == 1){
      decButton.style.display = "none";
    }

    if(count == 2){
      incButton.style.display = "block";
    }

    document.querySelector(".registration-content").lastChild.remove();
  }
}