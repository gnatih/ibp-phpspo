Sample PHP app to demonstrate using [phpSPO](https://github.com/vgrem/phpSPO) to fetch files from Sharepoint.

Required:
- A `secrets.json` file that has:
```
{
  "prefix": "contoso",
  "tenant": "contoso.onmicrosoft.com",
  "site_url": "https://contoso.sharepoint.com/sites/teamsite",
  "client_id": "abc1-def2-ghi3",
  "thumbprint": "0000000000000000000",
  "path": "path/to/drive/folder"
}
```

- A `private.key` retrieved when registering the Azure AD App. See [Azure AD documentation](https://learn.microsoft.com/en-us/sharepoint/dev/sp-add-ins-modernize/from-acs-to-aad-apps#manually-registering-a-new-application-in-azure-ad) for more details.
