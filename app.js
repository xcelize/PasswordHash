function shuffle(a) {
    for (let i = a.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [a[i], a[j]] = [a[j], a[i]];
    }
    return a;
}

function alphanumeric() {
    var tab = [];
    for (var i = 48; i<58; i++) {
        tab.push(String.fromCharCode(i));
    }
    for (var i = 97; i<122; i++) {
        tab.push(String.fromCharCode(i));
    }
    for (var i = 65; i<90; i++) {
        tab.push(String.fromCharCode(i))
    }
    return tab;
}

function passShuffle() {
    tab = alphanumeric();
    var shuffleTabPass = [];
    var suffleTab = shuffle(tab);
    for (var i=0; i<15; i++) {
        shuffleTabPass.push(suffleTab[i]);
    }
    return shuffleTabPass.join('');
}

function copyToClipboard(pId) {
    var copyText = $(pId);
    copyText.select();
    document.execCommand("copy");
}

$('document').ready( function() {
    $('#addon-wrapping').click( function() {
        $('#init-password').val(passShuffle());
    });
    $('#addon-copy').click( function() {
        copyToClipboard("#returned-password");
    });
    $('#sub-form').click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "hashControllerAjax.php",
            type: "POST",
            dataType: "text",
            data: {
                password : $('#init-password').val()
            },
            async: true,
            success: function(data) {
                $('#returned-password').val(data);
            },
            error: function() {
                console.log("petit problème");
            }
        });
    });
});
