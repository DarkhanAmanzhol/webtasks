function Click(){
        var A = document.getElementById("s11").value; 
        var B = document.getElementById("s12").value;
        var C = document.getElementById("s13").value;
        var D = document.getElementById("s21").value;
        var E = document.getElementById("s22").value;
        var F = document.getElementById("s23").value;
        var G = document.getElementById("s31").value;
        var H = document.getElementById("s32").value;
        var I = document.getElementById("s33").value;
        var AA = parseInt(A); var A_string = A.toString();
        var BB = parseInt(B); var B_string = B.toString();
        var CC = parseInt(C); var C_string = C.toString();
        var DD = parseInt(D); var D_string = D.toString();
        var EE = parseInt(E); var E_string = E.toString();
        var FF = parseInt(F); var F_string = F.toString();
        var GG = parseInt(G); var G_string = G.toString();
        var HH = parseInt(H); var H_string = H.toString();
        var II = parseInt(I); var I_string = I.toString();
        var result = EE * II * AA - FF * HH * AA - DD * II * BB + FF * GG * BB + DD * HH * CC - EE * GG * CC;
        document.getElementById("equality").innerHTML = A_string + "*(" + E_string + "*" + I_string + "-" + F_string + "*" 
        + H_string + ")-" + B_string + "*(" + D_string + "*" + I_string + "-" + F_string + "*" + G_string + ")+" + C_string + 
        "*(" + D_string + "*" + H_string + "-" + E_string + "*" + G_string + ")" + "=" + result;
        document.getElementById("result").innerHTML = result;
    }