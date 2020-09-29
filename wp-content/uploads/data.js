var botName = "Victoria",
botAvatar = "",
conversationData = {"homepage": {1: { "statement": [ 
"¡Hola! Mi nombre es Victoria, soy el propietario de este sitio web y me gustaría ser su asistente aquí.", 
"Solo tengo algunas preguntas.", 
"¿Cuál es tu nombre?", 
], "input": {"name": "name", "consequence": 1.2}},1.2:{"statement": function(context) {return [ 
"Encantada de conocerte, " + context.name  + "!", 
"Como puede ver, nuestro sitio web se encuentra en mantenimiento y estará operativo muy pronto.", 
];},"options": [{ "choice": "","consequence": 1.4},{ 
"choice": "","consequence": 1.5}]},1.4: { "statement": [ 
"Por favor proporciónenos su correo electrónico", 
], "email": {"email": "email", "consequence": 1.6}},1.5: {"statement": function(context) {return [ 
"" + context.name  + " Nos vemos pronto", 
];}},1.6: { "statement": [ 
"Gracias y hasta pronto", 
"¡Que tengas un gran día!", 
]}}};