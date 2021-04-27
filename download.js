window.onload = function(){
    document.getElementById('dogwn').addEventListener('click',()=>{
        const pass = this.document.getElementById('pass');
        console.log(pass);
        console.log(window);
        var opt = {
            height:50,
            width:20,
            filename:'eventpass.pdf',
            image: {type: 'jpeg', quality: 0.98},
            html2canvas: {scale:10},
            jsPDF: {unit:'in',format:'letter',orientation:'landscape'}
        };
        html2pdf().from(pass).set(opt).save();
    })
}