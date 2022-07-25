<body class="bg-slate-700 text-white ">
    <div class="container mx-auto flex flex-col gap-5 my-5">
        <h1 class="text-3xl text-center text-gray-200 hover:text-stone-200 mt-3">Admin</h1>

        <div>
            <label class="mr-3" for="root">Type: </label>
            <select class="text-black" name="root" id="xml">
                <option value="cinema"> Cinema </option>
                <option value="examen"> Examen </option>
                <option value="resto"> Fiche Restaurant </option>
            </select>
        </div>

        <div>
            <span>Editeur:</span>
            <div id="editor"></div>
        </div>
        <div class="output">
            <span>Output:</span>
            <div class="message bg-gray-200 rounded-md text-gray-700 p-2" id="message"></div>
        </div>
        <button id="btnSave" class="bg-blue-500 hover:bg-blue-700 p-3 rounded-lg w-fit">Enregistrer</button>
    </div>

    <a href="home">
        <div class="back rounded-full ring ring-2 ring-slate-400 bg-opacity-75 bg-gray-800 hover:bg-gray-900 w-fit p-6">
            <img src="assets/img/back.png" alt="Go Back Home" class="w-[3rem] h-[3rem]">
        </div>
    </a>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/lib/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/xml");

        var select = $("#xml");
        var message = $("#message");
        var btnSave = $("#btnSave");
        var info = null;

        select.on("change", (e) => {
            editor.setValue("");
        });

        editor.on("change", (e) => {
            info = {
                "type" : select.val(),
                "code" : editor.getValue()
            };

            $.post(
                "controllers/api.php", 
                { 
                    "for": "validate", 
                    "data" : info 
                },
                (data, status) => { 
                    message.html(data);
                }
            );
        });

        btnSave.on("click", (e) => {
            e.preventDefault();

            if(isValid()) {
                $.post(
                    "controllers/api.php", 
                    { 
                        "for": "save", 
                        "data" : info 
                    },
                    (data, status) => { 
                        message.html(data);
                    }
                );
            }else  message.text("Document Not Valid");
            
        });

        function isValid(){
            return !message.val() && editor.getValue();
        }    
    </script>
</body>