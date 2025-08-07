import searchFormInit from "./searchForm";
import burgerMenuInit from "./burgerMenu";
import dymanicAdaptInit from "./dynamicAdapt";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', () => {
  searchFormInit();
  burgerMenuInit();
  dymanicAdaptInit();
});