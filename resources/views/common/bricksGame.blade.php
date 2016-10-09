<div align="center">
    <table border="2" width="298" height="441">
        <tr>
            <td width="298" align="center" height="280">
                <?php $num=0; ?>
                @for($x=0; $x<16; $x++)
                    <button onclick="zamen({{$num++}})" name="{{$num+1}}" width="70" height="70">{{$num}}</button>

                @endfor
            </td>
        </tr>
        <tr>
            <td bgcolor="#FFFF00" width="294" height="147">
                <div><p align="center"><font face="Fixedsys" size="1">Пятнашки</font><font
                                face="MS Sans Serif" size="1"><br>
                            Цель игры: передвигая костяшки (нажатием<br>
                            кнопки мышки на костяшку рядом с пустой), добится<br>
                            одной из следующих комбинаций.<br>
                        </font></p>
                </div>

                <table width="279">
                    <tr>
                        <td bgcolor="#FFFF00" width="135"><p align="center"><font face="MS Sans Serif" size="1">1,
                                    2, 3, 4<br>
                                    5, 6, 7, 8<br>
                                    9,10,11,12<br>
                                    13,14,15 </font></td>
                        <td bgcolor="#FFFF00" width="130"><p align="center"><font face="MS Sans Serif" size="1">1,
                                    2, 3, 4<br>
                                    5, 6, 7, 8<br>
                                    9,10,11,12<br>
                                    13,15,14</font></td>
                    </tr>
                </table>
        </tr>
        <td width="294" height="1">
            <p align="center"><input type="button" onclick="zan()" style="font-size: 11pt; font-weight: bold" id="newGame" name="newGame"
                                     value="Новая игра"></p>
    </table>

    <button onclick="say" name="say" id="say">say</button>
    <button onclick="say" name="say" id="say">say</button>
    <button onclick="say" name="say" id="say">say</button>
</div>