import { codes, countryStateInfo } from "./countryList.js";

window.onload = () => {
  const countrySelection = document.querySelector("#country");
  const stateSelection = document.querySelector("#state");
  const codeSelection = document.querySelector("#code");

  stateSelection.disabled = true;

  /* Looping through the countryStateInfo object and adding the countries to the country selection. */
  for (let country in countryStateInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      country,
      country
    );
  }

  /* A function that is called when the country selection is changed. */
  countrySelection.onchange = (e) => {
    /* Getting the value of the country selection. */
    const countrySelect = document.getElementById("country").value;
    
    /* Finding the country code for the selected country. */
    const code = codes.find(({ country, code }) => {
      return country === countrySelect ? code : null;
    });
    /* Setting the value of the code selection to the code of the selected country. */
    stateSelection.disabled = false;
    codeSelection.value = code.code;

    stateSelection.length = 1;

    /* Looping through the countryStateInfo object and adding the states to the state selection. */
    for (let state of countryStateInfo[e.target.value]) {
      stateSelection.options[stateSelection.options.length] = new Option(
        state,
        state
      );
    }
  };

  stateSelection.onchange = (e) => {};
};
