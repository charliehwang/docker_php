;(function (ready) {
  if (
    document.readyState === 'complete' ||
    document.readyState === 'interactive'
  ) {
    ready()
  } else {
    document.addEventListener('readystatechange', function () {
      if (document.readyState === 'complete') {
        ready()
      }
    })
  }
})(() => {
  /* the document is now complete. */

  document.addEventListener('keyup', (e) => {
    console.log(e.key)
  })
})
