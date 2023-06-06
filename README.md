# Prueba_Empresa_GML
                                                        Preguntas GML

1. Tienes un arreglo (llamado myArray) con 5 elementos (enteros en el rango de 1 a 100). Escribe un programa en PHP que imprima el número más alto del arreglo (si se repite, solo imprimir una vez). El programa solo debe imprimir el numero sin ningún texto

2. Escribir un programa en PHP que imprima una X construida a base de la letra X y utilizar el carácter de subrayado como espacio. El tamaño de la X se basa en una variable n que indicara el tamaño dela letra para imprimir (en una matriz de n X n) por ejemplo, para n = 5 se obtiene <br>
X__X  <br>
_X_X_ <br>
__X__ <br>
_X_X_ <br>
X___X <br>
Y para n = 6 se obtiene: <br>
X___X <br>
_X_X_ <br>
__XX__ <br>
__XX__ <br>
_X_X_ <br>
X___X <br>
Si n es igual a cero imprimir “ERROR” <br>

3. Escribir un programa en PHP que recorra un arreglo y genere un histograma en base a los números de este. El arreglo se llama myArray y contiene 10 elementos que corresponden a números enteros de 1 al 5. un histograma representa que tanto un elemento aparee en un conjunto de datos (Debe mosrar la frecuencia para todos los números del 1 al 5, incluso si no están presentes en el arreglo). Por ejemplo, para el arreglo: <br>
myArray = (1,2,1,3,3,1,2,1,5,1) el histograma se vería así: <br>
1: ***** <br>
2:** <br>
3:** <br>
4: <br>
5:* <br>

4. Tienes un arreglo (llamado myArray) con 10 elementos (enteros en el rango de 1 a 9). Escribe un programa en PHP que imprima el número que tiene más ocurrencias consecutivas en el arreglo y también imprimir la cantidad de veces que aparece la secuencia.
Su programa debe analizar el arreglo de izquierda a derecha para que en caso de dos números cumplan la condición, el que aparece por primera vez de izquierda a derecha será el que se imprima. La salida de los datos de los datos para el arreglo en el ejemplo (1,2,2,5,4,6,7,8,8,8) sería la siguiente: <br>
Longest: 3 <br>
Number: 8 <br>
En el ejemplo, la secuencia más larga la tiene el número 8 con una secuencia de tres ochos seguidos. Tenga en cuenta que el código que escriba debe imprimir los resultados exactamente como se muestra con el fin de que la pregunta sea considerada valida. <br>

5. Obtener utilizando una consulta SQL el nombre, apellido y salario (firstname, lastname y salary) para los empleados con un salario mayor o igual a 50.000 y menor o igual a 100.000 mostrar los resultados ordenados por nombre de forma ascendente
Tablas: <br>
APPX_employee(id, firstname, lastname, department_id, salary, educationlevel_id) <br>
APPX_department(id,department_name,department_city) <br>
APPX_educationlevel(id,description) <br>
Nota: los nombres de tabla distinguen mayúsculas de minúsculas. Escríbalos exactamente como se listen <br>


                                                        select e.firstname,e.lastname,e.salary <br>
                                                        from APPX_employee e where e.salary <br>
                                                        between 50000 and 100000  order by  e.firstname asc <br>








