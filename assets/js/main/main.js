//chuyển trang tới cart
let btnCart = document.querySelector("#btn-cart");
btnCart.addEventListener("click", (e) => {
    window.location.href = "?page=cart";
});

// chuyển trang tới checkout
let btnPay = document.querySelector("#btn-thanh-toan");

btnPay.addEventListener("click", (e) => {
    window.location.href = "?page=checkout";
    e.stopPropagation();
});

let btnIncreaseQuantity = document.querySelector(
    ".group-control-quantity #btn-increase-quantity"
);

let btnReduceQuantity = document.querySelector(
    ".group-control-quantity #btn-reduce-quantity"
);

let Quantity = document.querySelector("#quantity");
let QuantityValue = document.querySelector("#quantity-value");

// tăng số lượng sản phẩm
const increaseQuantity = (e) => {
    let counter = Number(Quantity.innerHTML) + 1;
    Quantity.innerHTML = counter;
    QuantityValue.value = counter;

    if (btnReduceQuantity.getAttribute("disable")) {
        btnReduceQuantity.setAttribute("disable", false);
    }
};

// giảm số lượng sản phẩm
const reduceQuantity = (e) => {
    let counter = Number(Quantity.innerHTML);
    if (counter > 1 && counter !== 1) {
        Quantity.innerHTML = counter - 1;
        QuantityValue.value = counter - 1;
    } else {
        e.currentTarget.setAttribute("disable", true);
    }
};

btnIncreaseQuantity.addEventListener("click", (e) => {
    increaseQuantity(e);
});

btnReduceQuantity.addEventListener("click", (e) => {
    reduceQuantity(e);
});

// tab show content des - tutorial - comment
let btnTabAll = document.querySelectorAll("#btn-tab");
let showContent = document.querySelector(".show-content");

const createShowContent = (tabId) => {
    switch (tabId) {
        case "#tab1":
            showContent.querySelector(".tab-1").classList.remove("hidden");
            showContent.querySelector(".tab-1").classList.add("block");
            showContent.querySelector(".tab-2").classList.add("hidden");
            showContent.querySelector(".tab-3").classList.add("hidden");
            break;
        case "#tab2":
            showContent.querySelector(".tab-2").classList.remove("hidden");
            showContent.querySelector(".tab-2").classList.add("block");
            showContent.querySelector(".tab-1").classList.add("hidden");
            showContent.querySelector(".tab-3").classList.add("hidden");
            break;
        case "#tab3":
            showContent.querySelector(".tab-3").classList.remove("hidden");
            showContent.querySelector(".tab-3").classList.add("block");
            showContent.querySelector(".tab-1").classList.add("hidden");
            showContent.querySelector(".tab-2").classList.add("hidden");
            break;
        default:
            showContent.querySelector(".tab-1").classList.add("block");
    }
};

btnTabAll.forEach((btnTab) => {
    btnTab.addEventListener("click", (e) => {
        removeBtnAcive();
        e.currentTarget.classList.add("active", "bg-primary", "text-white");
        let dataTab = e.currentTarget.dataset["tab"];
        createShowContent(dataTab);
    });
});

function removeBtnAcive() {
    btnTabAll.forEach((btn) => {
        if (btn.classList.contains("active")) {
            btn.classList.remove("active", "bg-primary", "text-white");
            btn.classList.add("text-primary");
        }
    });
}

createShowContent();
