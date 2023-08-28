import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);
const preElement = document.querySelectorAll('.post-body pre');
const anchorElement = document.querySelectorAll('.post-body a');


function elExsited(el) {
  return typeof(el) != 'undefined' && el != null && el.length > 0
} 

if(elExsited(preElement)){
  import("./snippet")
  .then(({ default: Snippet, preEl}) => {
    const snippet = new Snippet(preElement) 
      snippet
      .highlight()
      .creteCopyEl()
      .applyCopy();
  })
}


if(elExsited(anchorElement)){
  anchorElement.forEach((e) => {
    e.setAttribute('target', '_blank');
  })
}