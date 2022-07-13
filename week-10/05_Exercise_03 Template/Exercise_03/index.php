<html>
    <body style="margin: 30px;">
        <center>
        <h2>API: Custom MySQL Class - Exercise 03</h2>
            <div style="display: flex;">
                <div style="flex-grow: 1; background-color: #ddffdd; border: #00000033 solid 1px; margin: 5px;">
                    <p style="font-size: 1.5em; margin: 20px 0px 10px 0px;">
                        Access as USER
                    </p>
                    <form>
                        <input type="button" value="All Users" onclick="callAPI('userlist', '1')">
                        <input type="button" value="5 Newest Users" onclick="callAPI('newest', '1')">
                    </form>
                </div>
                <div style="flex-grow: 1; background-color: #ffdddd; border: #00000033 solid 1px; margin: 5px;">
                    <p style="font-size: 1.5em; margin: 20px 0px 10px 0px;">
                        Access as ADMIN
                    </p>
                    <form>
                        <input type="button" value="All Users" onclick="callAPI('userlist', '5')">
                        <input type="button" value="5 Newest Users" onclick="callAPI('newest', '5')">
                    </form>
                </div>
            </div>
            <hr>

            <p style="font-size: 1.5em; margin: 20px 0px 10px 0px;">
                Output Window
            </p>
            <div id="output" style="width: 80%; border: black solid 1px; border-radius: 30px; padding: 30px; background-color: #ebebeb;">
                Text...
            </div>
        </center>

        <script>
            async function callAPI(endpoint, accessLevel) {
                let response = await fetch("backend.php?action=" + endpoint + "&access=" + accessLevel);
                let data = await response.text();

                let outputDOM = document.querySelector("#output");
                outputDOM.innerHTML = data;
            }
        </script>
    </body>
</html>