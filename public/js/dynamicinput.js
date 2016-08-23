$(".outrosAtendimentos").focusout(function () {
    if ($(".outrosAtendimentos").val() == 'Atendimentos') {
        $(".atendimento").removeClass("nodisplay");
    } else {
        $(".atendimento").addClass("nodisplay");
        $(".atendimento").val('');
    }
});

$(".frequentaEscola").focusout(function () {
    if ($(".frequentaEscola").val() == 'Escola') {
        $(".escola").removeClass("nodisplay");
    } else {
        $(".escola").addClass("nodisplay");
        $(".escola").val('');

    }
});

$(".acompanhamentoMedico").focusout(function () {
    if ($(".acompanhamentoMedico").val() == 'Acompanhamento médico') {
        $(".medico").removeClass("nodisplay");
    } else {
        $(".medico").addClass("nodisplay");
        $(".medico").val('');

    }
});

$(".usoMedicacao").focusout(function () {
    if ($(".usoMedicacao").val() == 'Uso de medicação') {
        $(".medicacao").removeClass("nodisplay");
    } else {
        $(".medicacao").addClass("nodisplay");
        $(".medicacao").val('');

    }
});

$(".passeLivre").focusout(function () {
    if ($(".passeLivre").val() == 'Passe livre') {
        $(".passe").removeClass("nodisplay");
    } else {
        $(".passe").addClass("nodisplay");
        $(".passe").val('');

    }
});


$(".bpc").focusout(function () {
    if ($(".bpc").val() == 'BPC') {
        $(".tembpc").removeClass("nodisplay");
    } else {
        $(".tembpc").addClass("nodisplay");
        $(".tembpc").val('');

    }
});

$(".bolsaFamilia").focusout(function () {
    if ($(".bolsaFamilia").val() == 'Bolsa família') {
        $(".bolsa").removeClass("nodisplay");
    } else {
        $(".bolsa").addClass("nodisplay");
        $(".bolsa").val('');

    }
});
