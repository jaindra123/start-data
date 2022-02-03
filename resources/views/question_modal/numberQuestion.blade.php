<div class="question-box">
    <h5>23. Enter your postal code</h5>
    <form name="calc" class="clacdd">
        <table class="code-post">
            <tr>
                <td>
                    <input type="button" name="one" value="  1  " onclick="calc.input.value += '1'">
                    <input type="button" name="two" value="  2  " onclick="calc.input.value += '2'">
                    <input type="button" name="three" value="  3  " onclick="calc.input.value += '3'">
                    <input type="button" name="four" value="  4  " onclick="calc.input.value += '4'">
                    <br>
                    <input type="button" name="five" value="  5  " onclick="calc.input.value += '5'">
                    <input type="button" name="six" value="  6  " onclick="calc.input.value += '6'">
                    <input type="button" name="seven" value="  7  " onclick="calc.input.value += '7'">
                    <input type="button" name="eight" value="  8  " onclick="calc.input.value += '8'">
                    <br>
                    <input type="button" name="nine" value="  9  " onclick="calc.input.value += '9'">
                    <input type="button" name="zero" value="  0  " onclick="calc.input.value += '0'">
                    <br>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div class="otp-input-wrapper">
                        <input type="text" maxlength="4" pattern="[0-9]*" autocomplete="off">
                        <svg viewBox="0 0 240 1" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0" y1="0" x2="240" y2="0" stroke="#3e3e3e" stroke-width="2"
                                stroke-dasharray="44,22" />
                        </svg>
                    </div>
                    <br>
                    <div class="cost-post mt-4">
                        <input type="text" name="input" class="mb-4" maxlength="1" id="answer">
                        <br>
                        <input type="button" id="clear" name="clear" value="  Delete  " onclick="calc.input.value = ''">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
