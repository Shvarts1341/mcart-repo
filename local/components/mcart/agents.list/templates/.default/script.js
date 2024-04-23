let starElems
let agentID
BX.ready(function() {
    /*
    1. Спомощью document.querySelectorAll получить все DOM-элементы с классом star
    */
    starElems = document.querySelectorAll('.star')
   /*
    2. Повесить обработчик события на click
    Пример: BX.bind(element, "click", clickStar);
     */
    for (let i = 0; i < starElems.length; i++){
        BX.bind(starElems[i], "click", clickStar);
    }
    
    
});
function clickStar(event) {
    event.preventDefault();
    
    agentID = Number(event.currentTarget.dataset.id)

    if (agentID) { // если ID есть, то делаем ajax-запрос
        BX.ajax // https://dev.1c-bitrix.ru/api_help/js_lib/ajax/bx_ajax_runcomponentaction.php
            .runComponentAction(
                "mcart:agents.list", // название компонента
                "clickStar", // название метода, который будет вызван из class.php
                {
                    mode: "class", //это означает, что мы хотим вызывать действие из class.php
                    data: {
                        agentID: agentID // параметры, которые передаются на бэк
                    },
                }
            )
            .then( // если на бэке нет ошибок выполниться
                BX.proxy((response) => {
                    // консоле можно будет увидеть ответ от бэка, для разработки в конечном коде лучше убрать
                    let data = response.data;
                    if (data['action'] == 'success') {
                        for (let i = 0; i <= starElems.length; i++){
                            if (i == Number(data['agentID'])){
                            starElems[i-1].classList.add('active')
                            }
                        }
                        
                    }

                }, this)
            )
            .catch( // если на бэке есть ошибки выполниться
                BX.proxy((response) => {
                    console.log(response.errors);
                }, this)
            );
    }

}
