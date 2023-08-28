import hljs from 'highlight.js/lib/common';
import 'highlight.js/styles/default.css';
import 'highlight.js/styles/tokyo-night-dark.css';

export default class Snippet
{
    constructor(preEl)
    {
        this.preEl = preEl;
    }

    highlight() 
    {
        this.preEl.forEach((el) => 
        {
            hljs.highlightElement(el);
        });

        return this;
    }


    creteCopyEl()
    {
        for(let i = 0; i < this.preEl.length; i++)
            { 
                const div = document.createElement('div');
                this.preEl[i].append(div);
                const copyEl = document.querySelectorAll('.post-body pre div');
                
                copyEl[i].innerHTML = "<button class='py-1 absolute top-2 right-2'>"+
                "<svg fill=\"#fff\" width=\"30px\" height=\"30px\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\">"+
                "<path d=\"M13.49 3 10.74.37A1.22 1.22 0 0 0 9.86 0h-4a1.25 1.25 0 0 0-1.22 1.25v11a1.25 1.25 0 0 0 1.25 1.25h6"+
                ".72a1.25 1.25 0 0 0 1.25-1.25V3.88a1.22 1.22 0 0 0-.37-.88zm-.88 9.25H5.89v-11h2.72v2.63a1.25 1.25 0 0 0 1.25 1"+
                ".25h2.75zm0-8.37H9.86V1.25l2.75 2.63z\"/><path d=\"M10.11 14.75H3.39v-11H4V2.5h-.61a1.25 1.25 0 0 0-1.25 1.25v11"+
                "A1.25 1.25 0 0 0 3.39 16h6.72a1.25 1.25 0 0 0 1.25-1.25v-.63h-1.25z\"/></svg></button>";
                copyEl[i].setAttribute('id', 'codecopy-' + i);
            }

            return this;
    }

    applyCopy()
    {
        const Snippetscode = document.querySelectorAll('.post-body pre div button');

        Snippetscode.forEach(function(el) {
            el.addEventListener('click', function(el){
            let Snippetcontent = el.target.closest('pre');
            navigator.clipboard.writeText(Snippetcontent.textContent);
        })
        })

        return this;
    }
}

