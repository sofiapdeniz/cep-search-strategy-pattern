from Contracts.CepProviderInterface import CepProviderInterface
import requests


class ViaCEP(CepProviderInterface):
    def search(self, cep: str) -> dict:
        response = requests.get(f"https://viacep.com.br/ws/{cep}/json/")

        data = response.json()

        return {
            "cep": data.get("cep"),
            "rua": data.get("logradouro"),
            "bairro": data.get("bairro"),
            "cidade": data.get("localidade"),
            "fonte": "ViaCEP"
        }
