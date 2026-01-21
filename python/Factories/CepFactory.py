from Factories.Contracts.CepProviderFactoryInterface import CepProviderFactoryInterface
from Services.BrasilAPI import BrasilAPI
from Services.ViaCEP import ViaCEP


class CepFactory(CepProviderFactoryInterface):
    @staticmethod
    def make(provider_name: str):
        name = provider_name.lower()

        if name == 'brasil' or name == 'brasilapi':
            return BrasilAPI()

        if name == 'viacep':
            return ViaCEP()

        raise ValueError(f"provider {provider_name} unknown.")
