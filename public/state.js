
import { codes,countryInfo }from "./countryList";

    // load data from the country file immediately screen loads
window.onload = () => {
  // connectors to the html select tags for country and state respectively
  const countrySelection = document.querySelector("#country");
  const stateSelection = document.querySelector("#state");

  // disable state selection and wait for user to select a country first
  stateSelection.disabled = true;

 // loop through the file and get only the countries
 // set the countries as an option for country selection
  for (let country in countryStateInfo) {
    countrySelection.options[countrySelection.options.length] = new Option(
      country,
      country
    );
  }

  // This moment a user selects a country, enable the state Selection and set the states based on the country
  countrySelection.onchange = (e) => {
    stateSelection.disabled = false;

    stateSelection.length = 1;

    for (let state of countryStateInfo[e.target.value]) {
      stateSelection.options[stateSelection.options.length] = new Option(
        state,
        state
      );
    }
  };

  stateSelection.onchange = (e) => {};
};