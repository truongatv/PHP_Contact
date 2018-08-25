<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="content_index">
            <form name="ContactForm" action="confirm.php" method="post" class="form">
                <table>
                    <tr>
                        <td>
                            <label for="first_name">First name *</label>
                        </td>
                        <td>
                            <input type="text" name="first_name" required=”required”>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="last_name">Last name *</label>
                        </td>
                        <td>
                            <input type="text" name="last_name" required=”required”>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email Address *</label>
                        </td>
                        <td>
                            <input type="email" name="email" required=”required”>
                            <span class="validity"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="telephone">Phone number *</label>
                        </td>
                        <td>
                            <input type="number" name="telephone" required=”required”>
                            <span class="validity"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="comment">Comment *</label>
                        </td>
                        <td>
                            <textarea name="comment" cols="30" rows="10" required=”required”></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>