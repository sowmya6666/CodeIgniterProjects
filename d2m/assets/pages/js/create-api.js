var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

$("div#splash_setting").hide();
$("div#welcome_setting").hide();
$("div#login_setting").hide();
$("div#hamburger_setting").hide();
$("div#list_setting").hide();
$("div#list_with_tab_setting").hide();
$("div#form_setting").hide();

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Save & Continue";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    // Otherwise, display the correct tab:
    if(currentTab == 1){
        if (!$("input[name='screen_temp']:checked").val()) {
            alert('Please Select Any Template');
            currentTab = currentTab - n;
        }
    }
    showTab(currentTab);

}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}

$('input[type=radio][name=screen_temp]').change(function() {

    if (this.value == 'splash') {
        $("div#splash_setting").show();
        $("div#welcome_setting").hide();
        $("div#login_setting").hide();
        $("div#hamburger_setting").hide();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").hide();

    }
    else if (this.value == 'welcome') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").show();
        $("div#login_setting").hide();
        $("div#hamburger_setting").hide();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").hide();
    }
    else if (this.value == 'login') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").hide();
        $("div#login_setting").show();
        $("div#hamburger_setting").hide();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").hide();
    }
    else if (this.value == 'hamburger') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").hide();
        $("div#login_setting").hide();
        $("div#hamburger_setting").show();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").hide();
    }
    else if (this.value == 'simple_list') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").hide();
        $("div#login_setting").hide();
        $("div#hamburger_setting").hide();
        $("div#list_setting").show();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").hide();
    }
    else if (this.value == 'tab_list') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").hide();
        $("div#login_setting").hide();
        $("div#hamburger_setting").hide();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").show();
        $("div#form_setting").hide();
    }
    else if (this.value == 'form') {
        $("div#splash_setting").hide();
        $("div#welcome_setting").hide();
        $("div#login_setting").hide();
        $("div#hamburger_setting").hide();
        $("div#list_setting").hide();
        $("div#list_with_tab_setting").hide();
        $("div#form_setting").show();
    }
});