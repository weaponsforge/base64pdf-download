const init = () => {
  const initValueJson = 
`{
  "rkey":"oppa_KRA",
  "ReportLayout":"Rpt_KRA2.rpt",
  "params": {
    "pname":"kra_no",
      "pvalue":"2"
  }
}`

  document.getElementById('params').textContent = initValueJson
  document.getElementById('url').value = 'http://base64pdf.herokuapp.com/getpdf'
}