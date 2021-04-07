let base64pdf

const downloadBase64Pdf = async () => {
  const pdfurl = document.getElementById('url').value
  console.log(pdfurl)

  try {
    const result = await axios.post(pdfurl)
    console.log(result.data)
    base64pdf = JSON.stringify(result.data)
    document.getElementById('base64json').textContent = base64pdf
  } catch (err) {
    console.log(err.message)
  }
}
