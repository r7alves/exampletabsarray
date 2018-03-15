
$(document).ready(function() {
        var campos_max          = 20;   //max de 10 campos
        var x = 1; // campos iniciais trazer indice da view
        var button = $('#add_field');

        if (button.attr('data-contador') > 0) {
                x += parseInt(button.attr('data-contador'));
        }

        button.click(function (e) {
                e.preventDefault();     //prevenir novos clicks
                
                

                if (x < campos_max) {
                        
                        $('#listas').append('<div>\
                                <input type="text" placeholder="Descricão" name="experiencias['+x+'][descricao]">\
                                <input type="text" placeholder="Empresa" name="experiencias['+x+'][empresa]">\
                                <a href="#" class="remover_campo">Remover</a>\
                                </div>');
                        x++;
                }
        });
        // Remover o div anterior
        $('#listas').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
        });
});
