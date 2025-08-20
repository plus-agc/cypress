document.addEventListener("DOMContentLoaded", () => {
	const accordionContainers = document.querySelectorAll(
		".js-accordion-container",
	);

	for (const container of accordionContainers) {
		const body = container.querySelector(".js-accordion-body");

		if (body) {
			// コンテナ自体をクリック可能にする
			container.style.cursor = "pointer";

			// クリックイベントをコンテナに追加
			container.addEventListener("click", (event) => {
				// すでにトリガーボタンがある場合はそのイベントを優先
				if (event.target.closest(".js-accordion-trigger")) {
					return;
				}

				const isOpen = body.classList.contains("is-open");

				if (isOpen) {
					// アコーディオンを閉じる
					body.classList.remove("is-open");
					body.classList.add("p-products__list--collapsed");
				} else {
					// アコーディオンを開く
					body.classList.add("is-open");
					body.classList.remove("p-products__list--collapsed");
				}
			});
		}
	}
});
