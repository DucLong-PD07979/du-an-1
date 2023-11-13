export const convertMoney = (codeContry, codeMoney) => {
    return new Intl.NumberFormat(codeContry, {
        style: "currency",
        currency: codeMoney,
    });
};
