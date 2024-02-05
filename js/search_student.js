function search_key() {
    let name = document.forms["search_form"]["student_name"].value;
    let number = document.forms["search_form"]["student_number"].value;
    if (name == "" && number == "") {
        alert("Enter student name or student number ");
        return false;
    }
}