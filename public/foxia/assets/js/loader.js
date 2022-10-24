function showLoading() {
    $("#submitLoading").show()
    $("#loadingKonfirmasi").show()
    $("#submitData").prop("disabled", true)
    $("#backSubmit").prop("disabled", true)
    $("#okButton").prop("disabled", true)
    $("#batalButton").prop("disabled", true)
}
  
function hideLoading() {
    $("#submitLoading").hide()
    $("#loadingKonfirmasi").hide()
    $("#submitData").prop("disabled", false)
    $("#backSubmit").prop("disabled", false)
    $("#okButton").prop("disabled", false)
    $("#batalButton").prop("disabled", false)
}