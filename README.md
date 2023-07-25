# Prueba técnica sobre PHPUnit

_Esta prueba se divide en dos partes con la intención de evaluar tus conocimientos teóricos y prácticos sobre los términos técnicos de PHP y principalmente su herramienta de pruebas, PHPUnit_.

**Objetivo**: Evaluar el conocimiento y comprensión sobre **PHPUnit** principalmente.

---

### Estructura de carpetas

```shell
└── drill
    ├── .gitignore
    ├── composer.json
    ├── composer.lock
    ├── phpunit.xml
    ├── src
    ├── tests
    └── vendor
```

1. **.gitignore**: Archivo especial utilizado por GIT para especificar qué archivos y carpetas deben ser ignorados. En el proyecto registramos a "vendor" y al archivo de cache generado por PHPUnit ".phpunit.result.cache".
2. **drill**: Esta es la carpeta principal (raíz) del proyecto. Contiene todos los archivos y carpetas relacionados con el proyecto. _Drill significa ejercicio e instrucción_.
3. **composer.json**: Archivo de Composer que administra las dependencias necesarias, en nuestro caso "phpunit/phpunit". 
4. **composer.lock**: Archivo generado automáticamente por Composer.
5. **phpunit.xml**: Archivo de configuración utilizado por **PHPUnit**, aquí definimos bootstrap, colors y directory.
6. **src**: Carpeta que contiene el código fuente del proyecto. 
7. **tests**: Carpeta que contiene las clases test del proyecto. 
8. **vendor**: Carpeta generada por Composer. Contiene todas las dependencias del proyecto.

---

## Parte 1: Código (5 ejercicios)

> **Objetivo de la parte 1**: Evaluar la capacidad de crear código y demostrar dominio del tema mediante la resolución de problemas prácticos.

### Ejercicio 1: Probar método de una clase

1. Crea una clase llamada "CalcTest" que extienda de "PHPUnit\Framework\TestCase". Esta debe verificar al método "add" de la clase "Calc".
2. Implementa un método de prueba llamado "testAdd" para verificar la funcionalidad de la suma de dos números enteros.
3. Utiliza el assert adecuado para verificar que la suma de 3 y 6 es igual a 9.
4. Ejecuta tu prueba.

```shell
$ ./vendor/bin/phpunit     
PHPUnit 10.2.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.8
Configuration: /italomoralesf/prueba-técnica/drill/phpunit.xml

.                                                    1 / 1 (100%)

Time: 00:00.024, Memory: 6.00 MB

OK (1 test, 1 assertion)
```

### Ejercicio 2: Prueba de una excepción

1. Crea una clase llamada "Data" con un método estático "getItem" que reciba un array y un índice, este debe devolver el item correspondiente al índice.
2. Crea una clase de prueba llamada "DataTest" que extienda de "PHPUnit\Framework\TestCase".
3. Implementa un método de prueba que verifique que al intentar obtener un elemento fuera de los límites del array, se lance una excepción de tipo "OutOfBoundsException". También se debe verificar que el mensaje de la excepción sea "Index out of bounds".
4. Ejecuta tus pruebas.

```shell
$ ./vendor/bin/phpunit     
PHPUnit 10.2.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.8
Configuration: /italomoralesf/prueba-técnica/drill/phpunit.xml

..                                                   2 / 2 (100%)

Time: 00:00.017, Memory: 6.00 MB

OK (2 tests, 3 assertions)
```

### Ejercicio 3: Prueba de una clase con constructor

1. Escribe una clase llamada "Average" que reciba un array de números, esta debe tener un método llamado "calculate" que devuelva un promedio.
2. Crea una clase de prueba llamada "AverageTest" que extienda de "PHPUnit\Framework\TestCase".
3. Implementa un método llamado "testCalculate" que verifique la precisión del promedio.
4. Ejecuta tus pruebas.

```shell
$ ./vendor/bin/phpunit     
PHPUnit 10.2.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.8
Configuration: /italomoralesf/prueba-técnica/drill/phpunit.xml

...                                                  3 / 3 (100%)

Time: 00:00.026, Memory: 6.00 MB

OK (3 tests, 4 assertions)
```

### Ejercicio 4: Mockery

1. Escribe una clase llamada "Email" con un método llamado "send" que simule el envío de emails.
2. Implementa la prueba con el nombre "EmailTest" que extienda de "PHPUnit\Framework\TestCase".
3. Utilizar un mock para simular el comportamiento del método "send". Te debes asegurar de que siempre retorne un valor fijo como "true".
4. Ejecuta tus pruebas.

```shell
$ ./vendor/bin/phpunit     
PHPUnit 10.2.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.8
Configuration: /italomoralesf/prueba-técnica/drill/phpunit.xml

....                                                 4 / 4 (100%)

Time: 00:00.055, Memory: 8.00 MB

OK (4 tests, 5 assertions)
```

### Ejercicio 5: Clase Helper

1. Escribe una clase llamada "Herper" con los métodos "sum" (sumar) y "product" (multiplicar), estos deben poder recibir un array y retornar un entero.
2. Implementa la prueba con el nombre "HelperTest" que extienda de "PHPUnit\Framework\TestCase".
3. Utilizar dos métodos "testSum" y "testProduct" que refleje el comportamiento esperado (el resultado de las operaciones matemáticas).
4. Ejecuta tus pruebas.

```shell
$ ./vendor/bin/phpunit     
PHPUnit 10.2.6 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.8
Configuration: /italomoralesf/prueba-técnica/drill/phpunit.xml

......                                               6 / 6 (100%)

Time: 00:00.055, Memory: 8.00 MB

OK (6 tests, 7 assertions)
```

--- 

## Parte 2: Teoría (5 preguntas)

> **Objetivo de la parte 2**: Evaluar conocimiento y comprensión teórica del tema.

### Pregunta 1: _Conceptos básicos_

**Enunciado**: ¿Qué es PHPUnit y cuál es su objetivo principal?

> **Contexto**: Esta pregunta tiene como objetivo evaluar tu conocimiento sobre la definición y el propósito de PHPUnit como una herramienta de testing. Explica de manera clara y concisa la función principal de esta herramienta en el desarrollo de sistemas profesional.

<details><summary><b>Respuesta</b></summary>
<p>
PHPUnit es un sistema de testing para el lenguaje de programación PHP. Su objetivo principal es proporcionar una estructura cómoda y profesional para facilitar la escritura y ejecución de tests al momento de crear proyectos. Con PHPUnit verificamos cada componente y pieza de manera individual, así garantizamos calidad y robustez del código.
</p>
</details>

### Pregunta 2: _Estructura y sintaxis_

**Enunciado**: ¿Cuál es la estructura básica de un test en PHPUnit y cómo se definen sus métodos?

> **Contexto**: Esta pregunta tiene como objetivo evaluar tu comprensión sobre la estructura y la sintaxis utilizada en PHPUnit. Buscamos respuestas que demuestren conocimiento sobre la forma en que se definen los métodos de un test.

<details><summary><b>Respuesta</b></summary>
<p>
Básicamente:

1. Una clase de test debe llamarse como la clase a revisar con el sufijo "test".
2. Una clase de test debe extender de "PHPUnit\Framework\TestCase".
3. Los métodos deben comenzar con el prefijo "test". Aquí es donde escribimos la lógica y los asserts para verificar que los resultados son los esperados.
</p>
</details>

### Pregunta 3: _Asserts_

**Enunciado**: Nombra algunos de los assert más comunes en PHPUnit

> **Contexto**: Esta pregunta tiene como objetivo evaluar tu conocimiento sobre los assert. Esperamos que puedas mencionar algunos y de manera opcional explicar cómo se utilizan correctamente.

<details><summary><b>Respuesta</b></summary>
<p>
assertEquals, assertTrue, assertFalse, assertNull, assertNotNull, assertArrayHasKey.
</p>
</details>

### Pregunta 4: _Configuración y ejecución_

**Enunciado**: ¿Cómo se configura y ejecuta PHPUnit en un proyecto de PHP?

> **Contexto**: Esta pregunta tiene como objetivo evaluar tu comprensión sobre la configuración y ejecución de PHPUnit en un entorno de desarrollo profesional. Buscamos respuestas que demuestren conocimiento sobre la instalación, la configuración y la forma de ejecutar las pruebas desde el terminal.

<details><summary><b>Respuesta</b></summary>
<p>
Pasos principales: 

1. Se debe contar con el componente PHPUnit, lo logramos mediante Composer. En "composer.json" debe estar registrada la dependencia de desarrollo "phpunit/phpunit".
2. Cada clase debe extender de "PHPUnit\Framework\TestCase" con sus respectivos métodos de test.
3. Los tests se ejecutan con el comando "./vendor/bin/phpunit".
4. Opcionalmente, se pueden personalizar las configuraciones de PHPUnit mediante el archivo "phpunit.xml".
</p>
</details>

### Pregunta 5: _Cobertura de código_

**Enunciado**: ¿Qué es la cobertura de código?

> **Contexto**: Esta pregunta tiene como objetivo evaluar tu conocimiento sobre el concepto de cobertura de código. Esperamos que lo puedas explicar de manera precisa y breve.

<details><summary><b>Respuesta</b></summary>
<p>
La cobertura de código es una técnica utilizada para determinar qué porcentaje del código creado ha sido ejecutado durante las pruebas. PHPUnit y otras herramientas de test proporciona las funcionalidades necesarias para medir la cobertura de código.
</p>
</details>