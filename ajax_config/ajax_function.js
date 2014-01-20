divid='div2'; //в объект с индексом 'div2' будем выводить в реальном времени нашу таблицу table1


//функция "posting",служит для добавления двух текстовых полей из html-странички в базу данных
function posting(id1, id2, id3, id4, id5, id6) //начало функции, в функцию передаются id элементов двух текстовых полей, из которых будет забираться информация в БД
{
num1=document.getElementById(id1).value; 
num2=document.getElementById(id2).value;
num3=document.getElementById(id3).value;
num4=document.getElementById(id4).value;
num5=document.getElementById(id5).value;
num6=document.getElementById(id6).value;

alert(num1+' '+num2+' '+num3+' '+num4+' '+num5+' '+num6);

var oXmlHttp = createXMLHttp();			//создание объекта oxmlhttp с помощью функции createXMLHttp, приведенной ниже
oXmlHttp.open("post", "ajax_config/change_table.php", true); //подключение php-сценария, используется метод POST, и асинхронный способ связи с сервером(true)
oXmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");//это заголовок, он ОБЯЗАТЕЛЕН при методе POST, не забудь выбрать нужную кодировку
oXmlHttp.send('num1='+num1+'&num2='+num2+'&num3='+num3+'&num4='+num4+'&num5='+num5+'&num6='+num6);//отправка данных из текстовых полей на php-сервер

oXmlHttp.onreadystatechange = function() 	//перехват и обработка ответа сервера		
 	{if(oXmlHttp.readyState == 4) 		//данное состояние объекта oXmlHttp означает, что Все данные были переданы и соединение закрыто, 
						//только при этом состоянии 
						//мы обращаемся к свойству responseText, в котором и передается вся html-разметка и данные,
						// отправленные нам php-сценарием сервера 

   	 	{if(oXmlHttp.status == 200) 	//Свойство status содержит код статуса HTTP, передаваемое в ответа, 
						//а свойство statusText - текст описание статуса (например "ОК"
						//или "Not found"). Эти два метода позволяют убедиться, что получены именно те данные, 
						//которые вы запрашивали, или сообщить пользователю о возникшей ошибке:

	 	 	{a = oXmlHttp.responseText; //полученные данные записываются в виде текста в переменную a, и выводятся с помощью innerhtml в следующей функции obnovit()
	 		 //alert("Получены следующие данные: " + oXmlHttp.responseText); //раскоментируйте для вывода на экран сообщения с информацией от сервера
     	 		} 
			else {displayCustomerInfo("Ошибка: " + oXmlHttp.statusText);} //обработчик на случай, если возникнет ошибка получения данных
   		}
 	};					//конец перехвата

}//--------------------------конец функции "posting"



//функция обновления таблицы, которая обновляется каждые 2000 милисекунд с помощью таймера поставленного в начале html setInterval(obnovit, 2000);
function obnovit()
{
var oXmlHttp = createXMLHttp();
oXmlHttp.open("post", "ajax_config/refresh_table.php", true);
oXmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
oXmlHttp.send(null);
oXmlHttp.onreadystatechange = function() 	//перехват и обработка ответа сервера		
 	{if(oXmlHttp.readyState == 4) 
   	 	{if(oXmlHttp.status == 200) 
	 	 	{a = oXmlHttp.responseText;
	 		 document.getElementById(divid).innerHTML=a;	//вставка полученного ответа сервера в div, с помощью свойства innerhtml и id элемента, id был задан в самом начале, то есть можно выводить в любой div, зная его id
     	 		} 
			else {displayCustomerInfo("Ошибка: " + oXmlHttp.statusText);}
   		}
 	};

}
//-------------------------------------------------	



//функция для создания объекта xmlhttp, ключевого в ajax, работает в старых версиях IE----------------
 function createXMLHttp() {
        if(typeof XMLHttpRequest != "undefined") { // для браузеров аля Mozilla
          return new XMLHttpRequest();
        } else if(window.ActiveXObject) { // для Internet Explorer (all versions)
          var aVersions = ["MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0",
                   "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp",
                   "Microsoft.XMLHttp"
                   ];
          for (var i = 0; i < aVersions.length; i++) {
            try { //
              var oXmlHttp = new ActiveXObject(aVersions[i]);
              alert(aVersions[i]);
              return oXmlHttp;
            } catch (oError) {
              /* поскольку это элемент управления ActiveX, любая ошибка создания объекта будет
                возбуждать исключительную ситуацию, а это означает что попытке создания
                объекта необходимо предпринимать внутри конструкции try...catch.
                
                 В данном случае, если обнаружена ошибка, мы
                 ничего не делаем, создать объект с данной версией компонента не удалось.
               */
            }
          }
          throw new Error("Невозможно создать объект XMLHttp.");
        }
      }

