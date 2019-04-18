const baseUrl = "http://easteregg.wildcodeschool.fr/api/"

const dispactchFetch = (url, callback) => {
  fetch(url)
    .then(function (response) {
      return response.json();
    }).then(res => {
      callback(res)
    })
}

class Endpoint {

  getEggs = (callback) => {
    const eggUrl = baseUrl + "eggs"
    dispactchFetch(eggUrl, res => {
      callback(res)
    })
  }
  getCharacters = (callback) => {
    const charactersUrl = baseUrl + "characters"
    dispactchFetch(charactersUrl, res => {
      callback(res)
    })
  }
  getSingleEgg = (id, callback) => {
    const eggUrl = `${baseUrl}eggs/${id}`
    console.log(eggUrl);

    dispactchFetch(eggUrl, res => {
      callback(res)
    })
  }
  getSingleCharacter = (id, callback) => {
    const characterUrl = `${baseUrl}characters/${id}`
    dispactchFetch(characterUrl, res => {
      callback(res)
    })
  }

  getRandomCharacter = (callback) => {
    const characterUrl = `${baseUrl}characters/random`
    dispactchFetch(characterUrl, res => {
      callback(res)
    })
  }

  getRandomEgg = (callback) => {
    const eggUrl = `${baseUrl}eggs/random`
    console.log(eggUrl);

    dispactchFetch(eggUrl, res => {
      callback(res)
    })
  }

}

export const endpoint = new Endpoint()