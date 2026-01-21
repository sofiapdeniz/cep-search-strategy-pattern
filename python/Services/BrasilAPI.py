from Contracts.CepProviderInterface import CepProviderInterface
import requests


class BrasilAPI(CepProviderInterface):
    def search(self, cep: str) -> dict:
        response = requests.get(f"https://brasilapi.com.br/api/cep/v1/{cep}")

        data = response.json()

        return {
            "cep": data.get("cep"),
            "rua": data.get("street"),
            "bairro": data.get("neighborhood"),
            "cidade": data.get("city"),
            "fonte": "BrasilAPI"
        }
